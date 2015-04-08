<?php namespace App\Http\Controllers\Auth;

use App\FacebookUser;
use App\Services\Email;
use App\Services\Loginar;
use App\Http\Controllers\Controller;
use App\User;
use App\Wunderfactory\Facades\Facebook;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

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
    protected $email;
    protected $session;
	/*
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar, Loginar $loginar, Email $email, Store $session)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
        $this->loginar = $loginar;
        $this->email= $email;
        $this->session = $session;


		$this->middleware('guest', ['except' => 'getLogout']);
	}


	public function getFacebook() {
		return redirect()->away(Facebook::getLoginURL());
	}

	public function getFacebookReturn() {
		if (Facebook::getSessionFromRedirect()) {
			if(Facebook::foundFacebookUser()) {
				if(Facebook::getFacebookUser()->user) {
                    if(User::where('id', Facebook::getFacebookUser()->user->id)->whereHas('emails', function($q)
                        {
                            $q->where('verified', true);

                        })->count() > 0) {
                        Facebook::getFriends();
                        Auth::login(Facebook::getFacebookUser()->user);
                        return redirect()->action('UsersController@show', Auth::user()->username);
                    }
                    return redirect()->to('auth/login')->withErrors(['user' => Lang::get('validation.user')]);

				} else {
					$this->session->put(['facebookUser_id' => Facebook::getFacebookUser()->id]);
					return redirect('auth/register')->withInput(Facebook::createInput())->with(array('fbid' => Facebook::getFacebookUser()->id));
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
        Log::error($this->session->all());
        Log::error(array_get($this->session->all(),'facebookUser_id'));
		if ( array_has($this->session->all(), 'facebookUser_id')) {
            Log::error(array_get($this->session->all(),'facebookUser_id'));
			$fb = FacebookUser::find(array_get($this->session->all(),'facebookUser_id'));
			$fb->user_id = $user->id;
			$fb->save();
			$this->session->forget('facebookUser_id');
		}
		//$this->auth->login($user);
        flash()->warning('Please verify your E-Mail to login.');
		return redirect('auth/login');
	}

    public function postLogin(Request $request) {
        $validator = $this->loginar->validate($request->all());
        if($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        if ($this->loginar->login($request->all())) {
            return redirect()->action('UsersController@show', Auth::user()->username);
        } else {
            return redirect($this->loginPath())
                ->withInput($request->only('username', 'remember'))
                ->withErrors([
                    'email' => $this->getFailedLoginMessage(),
                ]);
        }
    }

    public function getEmail($token = null) {
        if ($verifiedEmail = $this->email->verifyEmail($token)) {
                Auth::login($verifiedEmail->user);
                flash()->success('auth/email.verified');
                return redirect()->action('UsersController@show', [$verifiedEmail->user->username]);
        }
        flash()->error('auth/email.token-expired');
        return redirect()->to('auth/login');
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath'))
        {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/overview';
    }

    protected function getFailedLoginMessage()
 	{
 		return Lang::get('auth/login.failed');
  	}
}
