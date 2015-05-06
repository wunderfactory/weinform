<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Wundership\Http\Requests;
use Wundership\Immediate;

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

		$immediate = new Immediate([$input]);
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
		return 'foo';
		/*
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		$type = $shipment->typeable()->findOrFail($type);
		$shipment->typeable()->delete();
		$type->destroy();
		return redirect(route('shipments.edit', $shipment));
		*/
	}

}
