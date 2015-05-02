<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;
use Wundership\Spec;

use Illuminate\Http\Request;

class ShipmentSpecController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($shipment)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
		$specs = Spec::all();
		return view('shipments.edit.spec.index')
			->with('shipment', $shipment)
			->with('spec', $specs);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($shipment)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($shipment)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function show($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function edit($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function update($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $shipment, $origin
	 * @return Response
	 */
	public function destroy($shipment, $origin)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
	}

	public function select($shipment)
	{
		$shipment = Auth::user()->shipments()->findOrFail($shipment);
		$specs = Input::get('specs');
		$shipment->specs()->detach();
		foreach($specs as $spec)
		{
			$shipment->specs()->save(Spec::findOrFail($spec));
		}
		$shipment->save();
		return redirect(route('shipments.edit', $shipment));
	}

}
