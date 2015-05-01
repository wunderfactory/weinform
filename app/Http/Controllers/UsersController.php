<?php namespace Wundership\Http\Controllers;

use Wundership\Commands\CreateUserProfile;
use Wundership\Http\Requests;
use Wundership\Services\ProfilerContract;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class UsersController extends Controller {

    function __construct(ProfilerContract $profiler)
    {
        $this->middleware('auth',['except' => ['getIndex', 'getPicture']]);
        $this->middleware('user');
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

    public function getPicture($user) {
        if($user->profile && $user->profile->picture) return Response::download(storage_path('app/'.$user->profile->picture->filePath()));
        if($user->facebookUser) return Response::make(file_get_contents('https://graph.facebook.com/'.$user->facebookUser->id.'/picture?type=large'))->header('Content-Type', 'image/jpeg');
        return Response::download(storage_path('app/no_image.jpg'));
    }
}
