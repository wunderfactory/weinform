<?php namespace Wundership\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    protected $username;
    protected $user;

    function __construct()
    {
        $this->user = Auth::user();
        $this->username = Auth::user() ? Auth::user()->username : false;
    }


}
