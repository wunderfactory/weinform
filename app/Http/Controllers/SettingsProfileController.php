<?php namespace App\Http\Controllers;

use App\Commands\SendVerificationForPhone;
use App\Commands\UpdateUserProfile;
use App\Commands\VerifyPhone;
use App\Http\Requests;
use App\VerifiedPhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use App\Services\ProfilerContract;
class SettingsProfileController extends Controller {
    protected $profiler;

    function __construct(ProfilerContract $profiler)
    {
        $this->middleware('auth');
        $this->profiler = $profiler;
    }


    public function getIndex($user)
    {
        if($user->id != Auth::user()->id) {
            returnresponse('Unauthorized.', 401);
        }
        Session::flash("_old_input",$user->profile );
        return view('dashboard.profile.edit')->withUser($user);
    }

    public function putUpdateProfile(Request $request, $user)
    {
        if($user->id != Auth::user()->id) {
            return response('Unauthorized.', 401);
        }
        $vali = $this->profiler->validate($request->all());
        if ($vali->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($vali->errors());
        }
        $this->dispatch(new UpdateUserProfile($user->profile, $request->only(['hometown', 'languages', 'job', 'bio'])));
        flash()->success(Lang::get('successfully.update.profile'));
        return redirect()->action('SettingsProfileController@getIndex', [$user->username]);
    }

    public function getProfilePicture($user)
    {
        return view('dashboard.profile.photo')->withUser($user);
    }

    public function putProfilePicture($user)
    {
        return view('dashboard.profile.photo')->withUser($user);
    }

    public function getVerifications($user)
    {
        return view('dashboard.profile.verifications')->withUser($user);
    }

    public function getSendVerificationToken($user, $id){
        $this->dispatch(
            new SendVerificationForPhone(VerifiedPhoneNumber::findOrFail($id))
        );
        flash()->success('Message sent! Wait a bit!');
        return redirect()->back();
    }

    public function postVerifyPhone(Request $request, $user){
        $token = $request->get('token');
        if ($token && $this->dispatch(new VerifyPhone($token)))
        {
            flash()->success('successfully verified your phone');
        } else
        {
            flash()->error('token expired! try again with new token!');
        }
        return redirect()->back();
    }

    public function getRatings($user)
    {
        return view('dashboard.profile.ratings')->withUser($user);
    }
}
