<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class StaticController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('static.home');
	}

	public function getLang($language)
	{
		Session::put('language', $language);

		return redirect()->back();
	}

	public function getComplete()
	{
		return view('profile.show');
	}

	public function getOverview()
	{
		return view('product.overview');
	}

}
