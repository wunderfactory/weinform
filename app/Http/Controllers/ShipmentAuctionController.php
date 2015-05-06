<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Wundership\Http\Requests;

class ShipmentAuctionController extends Controller {

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
		return view('shipments.edit.type.auction.create')
			->with('shipment', $shipment);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($shipment)
	{
		//
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
		//
	}

}
