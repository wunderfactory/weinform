<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Shipment;

class ShipmentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$shipments = Shipment::where('published_at', 'not', 'null')->get();
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
		$shipment = Shipment::findOrFail($shipment);
		if($shipment->published_at != null || $shipment->user->id == Auth::user()->id)
		{
			return view('shipments.show')->with('shipment', $shipment);
		}
		else
		{
			return App::abort(404);
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
		$shipment = Shipment::findOrFail($shipment);
		return view('shipments.edit')->with('shipment', $shipment);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $shipment
	 * @return Response
	 */
	public function update($shipment)
	{
		$shipment = Shipment::findOrFail($shipment);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $shipment
	 * @return Response
	 */
	public function destroy($shipment)
	{
		$shipment = Shipment::findOrFail($shipment);
	}

}
