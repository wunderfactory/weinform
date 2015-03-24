<?php namespace App\Http\Controllers\Auth;

use App\FacebookUser;
use App\User;
use App\Http\Controllers\Controller;
use App\Wunderfactory\Facades\Facebook;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/*
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}


	public function getFacebook() {
		return redirect()->away(Facebook::getLoginURL());
	}

	public function getFacebookReturn() {
		if (Facebook::getSessionFromRedirect()) {
			if(Facebook::foundFacebookUser()) {
				if(Facebook::getFacebookUser()->user) {
					Auth::login(Facebook::getFacebookUser()->user);
					return redirect()->to('/home');
				} else {
					Session::put('faceboobUser_id', Facebook::getFacebookUser()->id);
					return redirect('auth/register')->withInput(Facebook::createInput());
				}
			} else {
				dd("wtf");
				App::abort(404);
			}
		} else {
			return $this->getFacebook();
		}
		return $this->getFacebook();
	}

	public function postRegister(Request $request)
	{
		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}
		$user = $this->registrar->create($request->all());
		if (Session::has('faceboobUser_id')) {

			$fb = FacebookUser::find(Session::get('faceboobUser_id'));
			$fb->user()->associate($user);
			$fb->save();
			Session::forget('faceboobUser_id');
		}
		$this->auth->login($user);
		return redirect($this->redirectPath());
	}
}
