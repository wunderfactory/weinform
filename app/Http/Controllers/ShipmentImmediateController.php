<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Wundership\Http\Requests;
use Wundership\Immediate;
use Wundership\Shipment;

class ShipmentImmediateController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($shipment)
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		return view('shipments.edit.type.immediate.create')
			->with('shipment', $shipment);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);

		$input = Input::only('price');

		$validator = Validator::make(
			array($input),
			array(Immediate::$rules)
		);

		if ($validator->fails())
		{
			return Redirect::route('shipments.immediate.create', [$shipment])->withErrors($validator);
		}

		$immediate = new Immediate($input);
		$immediate->save();
		$immediate->shipment()->save($shipment);
		return redirect(route('shipments.edit', [$shipment]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $shipment, $type
	 * @return Response
	 */
	public function show($shipment, $type)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $shipment, $type
	 * @return Response
	 */
	public function edit($shipment, $type)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $shipment, $type
	 * @return Response
	 */
	public function update($shipment, $type)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $shipment, $type
	 * @return Response
	 */
	public function destroy($shipment, $type)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		$type = $shipment->typeable()->findOrFail($type);
		$shipment->typeable->delete();
		$shipment->typeable_id = 0;
		$shipment->typeable_type = '';
		$shipment->save();
		return redirect(route('shipments.edit', $shipment));
	}

	public function book($shipment)
	{
		$shipment = Shipment::findOrFail($shipment);
		if(!$shipment->is_bookable)
		{
			return redirect(route('shipments.show', $shipment))->with('message', 'Shipment is booked');
		}
		return view('shipments.book')
			->with('shipment', $shipment);
	}

	public function dobook($shipment)
	{
		$shipment = Shipment::findOrFail($shipment);
		if(!$shipment->is_bookable)
		{
			return redirect(route('shipments.show', $shipment))->with('message', 'Shipment is booked');
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

		$shipment->driver_id = Auth::user()->id;
		$shipment->save();
		return redirect(route('shipments.show', $shipment));
	}

}
