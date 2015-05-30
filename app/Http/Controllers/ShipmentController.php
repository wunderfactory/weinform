<?php namespace Wundership\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Shipment;
use Wundership\Size;
use Wundership\Spec;

class ShipmentController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		DB::connection()->enableQueryLog();
		$filter = array_replace([
			'type' => 'all',
			'day' => 'any',
			'sizes' => [],
			'specs' => [],
			'via' => [
				'Kassel',
				'Hannover',
				'Bremen',
				'Hamburg'
			],
			'sort' => 'price desc'
		], Input::get('filter', []));

		$shipments = Shipment::ofType($filter['type'])
			->via($filter['via'])
			->shipsOn($filter['day'])
			->onlySizes($filter['sizes'])
			->withoutSpecs('specs', $filter['specs'])
			->get();

		$shipments = $this->sortShipments($shipments, $filter['sort']);

		return view('shipments.index')
			->with('shipments', $shipments)
			->with('filter', $filter)
			->with('sizes', Size::all())
			->with('specs', Spec::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$unpublished = Auth::user()->shipments()->withUnpublished()->whereNull('published_at')->get();
		if($unpublished->count())
		{
			return view('shipments.create')
				->with('shipments', $unpublished);
		}
		return $this->store();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$shipment = Shipment::create(['title' => 'Neue Sendung']);
		$user = Auth::user()->shipments()->save($shipment);
		return redirect(route('shipments.show', ['shipment' => $shipment]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $shipment
	 * @return Response
	 */
	public function show($shipment)
	{
		$shipment = Shipment::withUnpublished()->findOrFail($shipment);
		if($shipment->published_at != null || (Auth::user() && $shipment->user->id == Auth::user()->id))
		{
			return view('shipments.show')->with('shipment', $shipment);
		}
		else
		{
			abort(404, 'Shipment not found');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $shipment
	 * @return Response
	 */
	public function edit($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		return view('shipments.edit')
			->with('shipment', $shipment);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $shipment
	 * @return Response
	 */
	public function update($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		$input = Input::only(
			[
				'title',
				'collect_after',
				'deliver_after'
			]
		);
		$v = Validator::make($input,
			array_merge(Shipment::$rules, [
				'collect_after' => 'required|date_format:d.m.Y H:i|after:'.Carbon::now(),
				'deliver_after' => 'required|date_format:d.m.Y H:i|after:'.Carbon::createFromFormat('d.m.Y H:i', $input['collect_after'])->addHours(3),
			])
		);

		if($v->fails())
		{
			return redirect()->back()->withErrors($v->errors());
		}

		$shipment->title = $input['title'];
		$shipment->collect_after = Carbon::createFromFormat('d.m.Y H:i', $input['collect_after']);
		$shipment->collect_before = Carbon::createFromFormat('d.m.Y H:i', $input['collect_after'])->addHours(3);
		$shipment->deliver_after = Carbon::createFromFormat('d.m.Y H:i', $input['deliver_after']);
		$shipment->deliver_before = Carbon::createFromFormat('d.m.Y H:i', $input['deliver_after'])->addHours(3);

		$shipment->save();

		return redirect(route('shipments.edit', $shipment));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $shipment
	 * @return Response
	 */
	public function destroy($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	public function publish($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		if($shipment->is_published)
		{
			return redirect()->back();
		}

		return view('shipments.publish')->with('shipment', $shipment);
	}

	public function doPublish($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		if($shipment->is_published)
		{
			return redirect()->back();
		}

		$v = Validator::make(Input::only('agb'),
			[
				'agb' => 'accepted'
			]
		);

		if($v->fails())
		{
			return redirect()->back()->withErrors($v->errors());
		}

		$ret = $shipment->publish();

		if($ret[0])
		{
			return redirect()->route('shipments.show', $shipment);
		}
		else
		{
			return redirect()->route('shipments.edit', $shipment)->withErrors($ret[1]);
		}
	}

	public function booking()
	{

	}

	private function sortShipments($shipments, $sort)
	{
		switch($sort)
		{
			case 'price asc':
				$shipments = $shipments->sortBy(function($shipment)
				{
					return $shipment->typeable->price;
				});
				break;
			case 'collect asc':
				$shipments = $shipments->sortBy(function($shipment)
				{
					return $shipment->collect_after;
				});
				break;
			case 'collect desc':
				$shipments = $shipments->sortByDesc(function($shipment)
				{
					return $shipment->collect_after;
				});
				break;
			case 'size asc':
				$shipments = $shipments->sortBy(function($shipment)
				{
					return $shipment->size_id;
				});
				break;
			case 'size desc':
				$shipments = $shipments->sortByDesc(function($shipment)
				{
					return $shipment->size_id;
				});
				break;
			default:
				$shipments = $shipments->sortByDesc(function($shipment)
				{
					return $shipment->typeable->price;
				});
		}
		return $shipments;
	}

}
