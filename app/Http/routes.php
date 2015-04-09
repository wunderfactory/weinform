<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('dashboard', function(){

	$user = Auth::user();

	return View::make('dashboard.overview')->with(['user' => $user]);

});


Route::get('profile', function(){

	$user = Auth::user();

	return View::make('dashboard.profile.edit')->with(['user' => $user]);

});

Route::get('account', function(){

	$user = Auth::user();

	return View::make('dashboard.account.notifications')->with(['user' => $user]);

});

Route::get('overview', function(){

	if(Auth::user()){
		$user = Auth::user();
	}

	return View::make('product.overview')->with(['user' => $user]);

});












Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('user',                 'UsersController');
Route::resource('user.profile',         'ProfileController');
Route::resource('user.driver',          'DriverController');
Route::group(['prefix' => 'user/{user}'], function()
{
    Route::controller('settings',        'SettingsController');
    Route::get('profile/picture/show', 'ProfileController@profilePicture');
});
Route::get('test2', function() {
    return view('home');
});

Route::post('test', function() {
    $file = \App\File::file(\Illuminate\Support\Facades\Request::file('file'), \App\UserProfile::first());
    return  $file;
});
Route::controller('/', 'StaticController');







