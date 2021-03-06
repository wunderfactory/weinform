<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Wundership\Address;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Shipment;

class ShipmentDestinationController extends Controller {

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
		$addresses = Auth::user()->addresses;
		return view('shipments.edit.destination.index')
			->with('shipment', $shipment)
			->with('addresses', $addresses);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);

		return view('shipments.edit.destination.create')
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

		$input = Input::only([
			'title',
			'street',
			'city',
			'zip'
		]);

		$v = Validator::make($input, Address::$rules);

		if($v->fails())
		{
			return redirect()->back()->withErrors($v->errors());
		}
		Auth::user()->addresses()->save(Address::create($input));
		return redirect()->route('shipments.destination.index', $shipment);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $shipment, $destination
	 * @return Response
	 */
	public function show($shipment, $destination)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $shipment, $destination
	 * @return Response
	 */
	public function edit($shipment, $destination)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $shipment, $destination
	 * @return Response
	 */
	public function update($shipment, $destination)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $shipment, $destination
	 * @return Response
	 */
	public function destroy($shipment, $destination)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
	}

	public function select($shipment)
	{
		$shipment = Auth::user()->shipments()->withUnpublished()->findOrFail($shipment);
		$address = Auth::user()->addresses()->findOrFail(Input::get('address'));
		$shipment->destination()->associate($address);
		$shipment->save();
		return redirect(route('shipments.edit', $shipment));
	}

}
