<?php namespace Wundership\Http\Controllers;

use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShipmentAuctionBidController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($shipment, $auction)
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($shipment, $auction)
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($shipment, $auction)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $shipment, $auction, $bid
	 * @return Response
	 */
	public function show($shipment, $auction, $bid)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $shipment, $auction, $bid
	 * @return Response
	 */
	public function edit($shipment, $auction, $bid)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $shipment, $auction, $bid
	 * @return Response
	 */
	public function update($shipment, $auction, $bid)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $shipment, $auction, $bid
	 * @return Response
	 */
	public function destroy($shipment, $auction, $bid)
	{
		//
	}

}
