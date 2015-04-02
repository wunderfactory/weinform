<?php namespace App\Http\Controllers;

use App\Commands\CreateUserProfile;
use App\Commands\UpdateUserProfile;
use App\Http\Requests;
use App\Services\ProfilerContract;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller {
    protected $profiler;

    function __construct(ProfilerContract $profiler)
    {
        $this->middleware('auth');
        $this->profiler = $profiler;
        // TODO: Implement __construct() method.
    }

    /**
     * Display a listing of the resource.
     *
     * @param $user
     * @return Response
     */
	public function index($user)
	{
		//
        return view('profile.show')->withUser($user);
	}

    /**
     * Show the form for creating a new resource.
     * @param $user
     * @return Response
     */
	public function create($user)
	{
        if($user != Auth::user()) {
            return response('Unauthorized.', 401);
        }
        if($user->profile) {
            flash()->error('You already have a profile');
            return redirect()->back();
        }
        return view('profile.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     */
	public function store(Request $request, User $user)
	{
        if($user != Auth::user()) {
            return response('Unauthorized.', 401);
        }
        if($user->profile) {
            flash()->error('You already have a profile');
            return redirect()->back();
        }
        $validator = $this->profiler->validate($request->all());
        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
        }
        $this->dispatch(
            new CreateUserProfile($user, $request->only('hometown', 'languages', 'job', 'bio'))
        );
        return view('profile.verify');
	}

    /**
     * Display the specified resource.
     *
     * @param $user
     * @return Response
     */
	public function show($user)
	{
		//
        return redirect('user/'.$user->username.'/profile');
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param $user
     * @return Response
     */
	public function edit($user)
    {
        if($user != Auth::user()) {
            returnresponse('Unauthorized.', 401);
        }
        Session::flash("_old_input",$user->profile );
        return view('profile.update');
	}

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $user
     * @return Response
     */
	public function update(Request $request, $user)
	{
        if($user != Auth::user()) {
            return response('Unauthorized.', 401);
        }
        $vali = $this->profiler->validate($request->all());
        if ($vali->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($vali->errors());
        }
		$this->dispatch(new UpdateUserProfile($user->profile, $request->only(['hometown', 'languages', 'job', 'bio'])));
        return redirect()->action('ProfileController@index', [$user->username]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
