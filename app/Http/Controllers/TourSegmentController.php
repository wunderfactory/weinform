<?php namespace Wundership\Http\Controllers;

use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TourSegmentController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', [
			'only' => [
				'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
			]
		]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($tour)
	{
		$tour = Tour::findOrFail($tour);
		//TODO
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($tour)
	{
		$tour = Tour::findOrFail($tour);
		//TODO
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($tour)
	{
		$tour = Tour::findOrFail($tour);
		//TODO
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $tour, $segment
	 * @return Response
	 */
	public function show($tour, $segment)
	{
		$tour = Tour::findOrFail($tour);
		$segment = $tour->segments()->findOrFail($segment);
		//TODO
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $tour, $segment
	 * @return Response
	 */
	public function edit($tour, $segment)
	{
		$tour = Tour::findOrFail($tour);
		$segment = $tour->segments()->findOrFail($segment);
		//TODO
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $tour, $segment
	 * @return Response
	 */
	public function update($tour, $segment)
	{
		$tour = Tour::findOrFail($tour);
		$segment = $tour->segments()->findOrFail($segment);
		//TODO
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $tour, $segment
	 * @return Response
	 */
	public function destroy($tour, $segment)
	{
		$tour = Tour::findOrFail($tour);
		$segment = $tour->segments()->findOrFail($segment);
		//TODO
	}

}
