<?php namespace Wundership\Http\Controllers;

use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Tour;

class TourBookingController extends Controller {

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
		$tour = Tour::where('is_published', true)->findOrFail($tour);
		$bookings = $tour->bookings;
		return view('tour.booking.index')->with('tour', $tour)->with('bookings', $bookings);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($tour)
	{
		$tour = Tour::where('is_published', true)->findOrFail($tour);
		return view('tour.booking.create')->with('tour', $tour);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($tour)
	{
		$tour = Tour::where('is_published', true)->findOrFail($tour);
		//TODO
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $tour, $booking
	 * @return Response
	 */
	public function show($tour, $booking)
	{
		$tour = Tour::where('is_published', true)->findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		return view('tour.booking.show')->with('tour', $tour)->with('booking', $booking);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $tour, $booking
	 * @return Response
	 */
	public function edit($tour, $booking)
	{
		$tour = Tour::where('is_published', true)->findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		return view('tour.booking.edit')->with('tour', $tour)->with('booking', $booking);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $tour, $booking
	 * @return Response
	 */
	public function update($tour, $booking)
	{
		$tour = Tour::where('is_published', true)->findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		//TODO
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $tour, $booking
	 * @return Response
	 */
	public function destroy($tour, $booking)
	{
		$tour = Tour::where('is_published', true)->findOrFail($tour);
		$booking = $tour->bookings()->findOrFail($booking);
		//TODO
	}

}
