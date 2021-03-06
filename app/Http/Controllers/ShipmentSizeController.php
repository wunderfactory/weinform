<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Shipment;
use Wundership\Size;
use Wundership\User;

class ShipmentSizeController extends Controller {

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
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		$sizes = Size::all();
		return view('shipments.edit.size.index')
			->with('shipment', $shipment)
			->with('sizes', $sizes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function show($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function edit($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function update($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function destroy($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	public function select($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		$size = Size::findOrFail(Input::get('size'));
		$shipment->size()->associate($size);
		$shipment->save();
		return redirect(route('shipments.edit', $shipment));
	}

}
