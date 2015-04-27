<?php namespace Wundership\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Wundership\Address;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Tour;

class TourController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', [
			'only' => [
				'create', 'store', 'edit', 'update', 'destroy'
			]
		]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tours = Tour::where('is_published', true)
			->where('start', '>', Carbon::now()->addHours(3))
			->whereHas('segments', function($q) {
				if(Input::has('filter.from'))
				{
					$q->whereHas('from', function($q) {
						$q->where('city', Input::get('filter.from'));
					});
				}
			})
			->whereHas('segments', function($q) {
				if(Input::has('filter.to'))
				{
					$q->whereHas('to', function($q) {
						$q->where('city', Input::get('filter.to'));
					});
				}
			})
			->get();
		$from_cities = Address::has('segments_from');
		$to_cities = Address::has('segments_to');
		return view('tour.index')
			->with('tours', $tours)
			->with('from_cities', $from_cities)
			->with('to_cities', $to_cities)
			->with('filter', Input::get('filter'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$beacons = Address::where('is_beacon', true)->lists('title', 'id');
		return view('tour.create')->with('beacons', $beacons);
		//TODO
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only([
			'address_from',
			'address_to'
		]);
		$input['km_price'] = floatval('0.0' . Input::get('km_price'));
		$input['start'] = Carbon::parse(Input::get('start_date'))->setTime(Input::get('start_hour'), Input::get('start_minute'))->toDateTimeString();
		$validator = Validator::make($input, Tour::$rules);
		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator->errors());
		}
		$tour = new Tour($input);
		Auth::user()->tours()->save($tour);
		return redirect(route('tour.show', [$tour]));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $tour
	 * @return Response
	 */
	public function show($tour)
	{
		$tour = Tour::findOrFail($tour);
		return view('tour.show')->with('tour', $tour);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $tour
	 * @return Response
	 */
	public function edit($tour)
	{
		$tour = Tour::findOrFail($tour);
		return view('tour.edit')->with('tour', $tour);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $tour
	 * @return Response
	 */
	public function update($tour)
	{
		$tour = Tour::findOrFail($tour);
		//TODO
	}

	/**
	 * Show the form for publishing the specified tour.
	 *
	 * @param  int  $tour
	 * @return Response
	 */
	public function updatePublish($tour)
	{
		$tour = Tour::findOrFail($tour);
		return view('tour.publish')->with('tour', $tour);
	}

	/**
	 * Publish the specified tour.
	 *
	 * @param  int  $tour
	 * @return Response
	 */
	public function publish($tour)
	{
		$tour = Tour::findOrFail($tour);
		$tour->is_published = true;
		$tour->save();
		return redirect(route('tour.show', [$tour]));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $tour
	 * @return Response
	 */
	public function destroy($tour)
	{
		$tour = Tour::findOrFail($tour);
		//TODO
	}

}
