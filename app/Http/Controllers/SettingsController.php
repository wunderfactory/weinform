<?php namespace App\Http\Controllers;

use App\Commands\SendVerificationForPhone;
use App\Commands\VerifyPhone;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\VerifiedPhoneNumber;
use Illuminate\Http\Request;

class SettingsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex($user)
	{
        return view('settings.show')->withUser($user);
	}

    public function postUpdateSettings(Request $request, $user){
        $settings = $user->settings;
        $keys = ['hometown', 'bio', 'job', 'languages'];
        foreach($keys as $key) {
            $settings->{'hidden_'.$key} = $request->has($key);
        }
        $settings->save();
        return redirect()->back();
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

}
