<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {

	public function profile($user)
	{
        if(Auth::user() == $user) {
            return 'Autherizated user profile';
        } else if (Auth::user()){
            return 'Autherizated user other profile';
        } else {
            return 'guest user';
        }
	    return $user;
	}
}
