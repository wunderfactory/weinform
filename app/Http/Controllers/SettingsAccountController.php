<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SettingsAccountController extends Controller {

    public function getIndex($user)
    {
        return view('dashboard.account.notifications')->withUser($user);
    }

}
