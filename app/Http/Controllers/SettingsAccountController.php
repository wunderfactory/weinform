<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class SettingsAccountController extends Controller {

    public function getIndex($user)
    {
        return view('dashboard.account.notifications')->withUser($user);
    }

    public function getPaymentDetails($user)
    {
        return view('dashboard.account.payment')->withUser($user);
    }

    public function getPayoutDetails($user)
    {
        return view('dashboard.account.payout')->withUser($user);
    }

    public function getPrivacy($user)
    {
        return view('dashboard.account.privacy')->withUser($user);
    }

    public function postUpdatePrivacy(Request $request, $user){
        $settings = $user->settings;
        $keys = ['hometown', 'bio', 'job', 'languages'];
        foreach($keys as $key) {
            $settings->{'hidden_'.$key} = $request->has($key);
        }
        $settings->save();
        flash()->success(Lang::get('privacy.updated'));
        return redirect()->back();
    }

    public function getSecurity($user)
    {
        return view('dashboard.account.security')->withUser($user);
    }

        public function getSettings($user)
    {
        return view('dashboard.account.settings')->withUser($user);
    }

}
