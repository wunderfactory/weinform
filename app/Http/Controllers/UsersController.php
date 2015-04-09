<?php namespace App\Http\Controllers;

use App\Commands\CreateUserProfile;
use App\Http\Requests;
use App\Services\ProfilerContract;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller {
    use DispatchesCommands;
    protected $profiler;

    function __construct(ProfilerContract $profiler)
    {
        $this->profiler = $profiler;
        //$this->middleware('auth',['except' => ['profile']]);
    }


    public function getDashboard($user)
    {
        return view('dashboard.index')->withUser($user);
    }
    public function getOverview($user)
    {
        return view('product.overview')->withUser($user);
    }

    public function getIndex($user){
        return view('profile.show')->withUser($user);
    }
}
