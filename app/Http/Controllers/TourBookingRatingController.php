<?php namespace Wundership\Http\Controllers;

use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TourBookingRatingController extends Controller {

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
	public function index($tour, $booking)
	{
		$tour = Tour::findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		//TODO
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($tour, $booking)
	{
		$tour = Tour::findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		//TODO
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($tour, $booking)
	{
		$tour = Tour::findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		//TODO
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $tour, $booking, $rating
	 * @return Response
	 */
	public function show($tour, $booking, $rating)
	{
		$tour = Tour::findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		$rating = $booking->ratings()->findOrFail($rating);
		//TODO
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $tour, $booking, $rating
	 * @return Response
	 */
	public function edit($tour, $booking, $rating)
	{
		$tour = Tour::findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		$rating = $booking->ratings()->findOrFail($rating);
		//TODO
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $tour, $booking, $rating
	 * @return Response
	 */
	public function update($tour, $booking, $rating)
	{
		$tour = Tour::findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		$rating = $booking->ratings()->findOrFail($rating);
		//TODO
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $tour, $booking, $rating
	 * @return Response
	 */
	public function destroy($tour, $booking, $rating)
	{
		$tour = Tour::findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		$rating = $booking->ratings()->findOrFail($rating);
		//TODO
	}

}
