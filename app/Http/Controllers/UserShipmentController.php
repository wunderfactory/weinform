<?php namespace Wundership\Http\Controllers;

use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\User;

class UserShipmentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($user)
	{
		$user = User::findOrFail($user);
		$shipped = $user->shipments()->where('published_at', 'foobar')->get();
		$stubs = $user->shipments()->where('published_at', null)->get();
		$shipping = $user->shipments()->where('published_at', 'NOT', null)->get();
		return view('users.shipments.index')
			->with('shipped', $shipped)
			->with('shipping', $shipping)
			->with('stubs', $stubs);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($user)
	{
		$user = User::findOrFail($user);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($user)
	{
		$user = User::findOrFail($user);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $user, $shipment
	 * @return Response
	 */
	public function show($user, $shipment)
	{
		$user = User::findOrFail($user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $user, $shipment
	 * @return Response
	 */
	public function edit($user, $shipment)
	{
		$user = User::findOrFail($user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $user, $shipment
	 * @return Response
	 */
	public function update($user, $shipment)
	{
		$user = User::findOrFail($user);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $user, $shipment
	 * @return Response
	 */
	public function destroy($user, $shipment)
	{
		$user = User::findOrFail($user);
	}

}
