<?php namespace Wundership\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Shipment;

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
		$shipments = Shipment::all();
		return view('shipments.index')
			->with('shipments', $shipments);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('shipments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$shipment = Shipment::create([]);
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
				'collect_after',
				'deliver_after'
			]
		);
		$v = Validator::make($input,
			[
				'collect_after' => 'required|date_format:d.m.Y H:i|after:'.Carbon::now(),
				'deliver_after' => 'required|date_format:d.m.Y H:i|after:'.Carbon::createFromFormat('d.m.Y H:i', $input['collect_after'])->addHours(3),
			]
		);

		if($v->fails())
		{
			return redirect()->back()->withErrors($v->errors());
		}

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

}
