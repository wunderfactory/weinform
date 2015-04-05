<?php namespace App\Http\Controllers;

use App\Commands\CreateDriver;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DriverController extends Controller {


    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('driver', ['except' => ['create', 'store']]);
        $this->middleware('notDriver', ['only' => ['create', 'store']]);
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
        return $user;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($user)
	{
		//
        return view('driver.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(Request $request, $user)
	{
		$this->validate($request, ['accepted' => 'required']);

        $this->dispatch(new CreateDriver($user));
        return redirect()->intended('overview');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
