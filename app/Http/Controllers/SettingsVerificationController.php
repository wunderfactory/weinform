<?php namespace Wundership\Http\Controllers;

use Wundership\Commands\CreateVerification;
use Wundership\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Wundership\Services\Facebook;

class SettingsVerificationController extends Controller
{
    protected $facebook;

    function __construct()
    {
        $this->middleware('auth');
        $this->facebook = new Facebook(url('user/'.Auth::user()->username.'/settings/verify/return-facebook'));
    }

    public function getIndex($user)
    {
        if(Auth::user()->id != $user->id)
        {
            return abort(401,'Unauthorized');
        }
        if($user->verification)
        {
            flash()->warning(Lang::get('waring.verification.in.progress.or.verified'));
            return redirect()->action('SettingsProfileController@getVerifications', [$user->username]);
        }
        return view('dashboard.verify.start')->withUser($user);
    }

    /**
     * @param Request $request
     * @param $user
     * @return \Illuminate\View\View|void
     */
    public function postUploadImage(Request $request, $user)
    {
        if(Auth::user()->id != $user->id)
        {
            return abort(401,'Unauthorized');
        }
        if($user->verification)
        {
            flash()->warning(Lang::get('verification.in.progress.or.verified'));
            return redirect()->back();
        }
        $this->validate(
            $request, ['picture' => 'required']
        );
        $this->dispatch(new CreateVerification($user, $request->get('picture')));
        return view('dashboard.verify.thank_you');
    }

    public function getFacebook($user)
    {
        if(Auth::user()->id != $user->id)
        {
            return abort(401,'Unauthorized');
        }
        if ($user->facebookUser) {
            flash()->error(Lang::get('facebook.already.registered'));
            return redirect()->back();
        }
        return redirect()->away($this->facebook->getLoginURL());
    }

    public function getReturnFacebook($user)
    {
        if ($this->facebook->getSessionFromRedirect())
        {
           if ($this->facebook->connectUser($user)) {
               flash()->success(Lang::get('facebook.connected'));
           }
           else
               flash()->error(Lang::get('facebook.taken'));
            return redirect()->back();
        }
        flash()->error(Lang::get('facebook.does.not.respond.try.again'));
        return redirect()->back();
    }

    public function getRemoveFacebook($user)
    {
        if(Auth::user()->id != $user->id)
        {
            return abort(401,'Unauthorized');
        }
        if (!$user->facebookUser) {
            flash()->error(Lang::get('facebook.not.registered'));
            return redirect()->back();
        }
        $user->facebookUser->delete();
        flash()->success(Lang::get('facebook.removed'));
        return redirect()->back();
    }
}
