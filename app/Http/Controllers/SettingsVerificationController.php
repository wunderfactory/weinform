<?php namespace App\Http\Controllers;

use App\Commands\CreateVerification;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class SettingsVerificationController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
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
}
