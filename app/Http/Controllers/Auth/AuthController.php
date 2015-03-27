<?php namespace App\Http\Controllers\Auth;

use App\FacebookUser;
use App\Services\Loginar;
use App\Http\Controllers\Controller;
use App\User;
use App\VerifiedEmail;
use App\Wunderfactory\Facades\Facebook;
use Carbon\Carbon;
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

    protected $loginar;
	/*
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar, Loginar $loginar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
        $this->loginar = $loginar;

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
		if (Session::has('facebookUser_id')) {
			$fb = FacebookUser::find(Session::get('facebookUser_id'));
			$fb->user_id = $user->id;
			$fb->save();
			Session::forget('facebookUser_id');
		}
		$this->auth->login($user);
		return redirect($this->redirectPath());
	}

    public function postLogin(Request $request) {
        $validator = $this->loginar->validate($request->all());
        if($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        if ($this->loginar->login($request->all())) {
            return redirect()->intended($this->redirectPath());
        } else {
            return redirect($this->loginPath())
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => $this->getFailedLoginMessage(),
                ]);
        }
    }

    public function getEmail($token = null) {
        if ($token) {
            $email = VerifiedEmail::where('verify_token', $token)->first();
            if ($email && Carbon::now() <= $email->expires_at) {
                $email->verified_at = Carbon::now();
                $email->verified = true;
                $email->save();
                return redirect()->to('auth/login')->withInput(['username' => $email->email]);
            }
        }
        return redirect()->to('auth/login')->withErrors([
            'email' => 'The verify-token is expired, please request a new one.'
        ]);
    }
}
