<?php namespace Wundership\Http\Controllers;

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
	 *
	 */
	public function __construct()
	{
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
		return view('profile.complete');
	}

	public function getOverview()
	{
		return view('product.overview');
	}











	








	/* STATIC INFORMATION PAGES */

	public function getHowitworks()
	{
		return view('static.static_information.how_it_works');
	}

	public function getAbout()
	{
		return view('static.static_information.about');
	}
	public function getPress()
	{
		return view('static.static_information.press');
	}

	public function getSecurity()
	{
		return view('static.static_information.security_informations');
	}


	/* SUPPORT */

	public function getContact()
	{
		return view('static.support.contact');
	}

	public function getFaq()
	{
		return view('static.support.faq');
	}
	public function getPickup()
	{
		return view('static.static_information.pickup');
	}

	/* CALL TO ACTION PAGES */

	public function getFriends()
	{
		return view('static.call_to_action.invite_friends');
	}
}
