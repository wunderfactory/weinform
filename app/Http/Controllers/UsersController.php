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
        $this->middleware('auth',['except' => ['profile']]);
    }

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

    public function getComplete()
    {
        return view('profile.complete');
    }

    public function postComplete(Request $request)
    {
        if(Auth::user()->profile) {
            flash()->error('You already have a profile');
            return redirect()->back();
        }
        $validator = $this->profiler->validate($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
        }
        $this->dispatch(
            new CreateUserProfile(Auth::user(), $request->only('hometown', 'languages', 'job', 'bio'))
        );
        return view('profile.verify');
    }

    /* RESTful controller part*/

    public function index(){
        return 'hi';
    }

    public function show($user){
        return $user;
    }
}
