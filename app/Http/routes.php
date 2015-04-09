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
Route::get('hep', function(){

	return Request::segements();

});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['prefix' => 'user/{user}/settings/'], function()
{
    Route::controller('profile',        'SettingsProfileController');
    Route::controller('account',        'SettingsAccountController');
    Route::get('profile/picture/show', 'ProfileController@profilePicture');
});
Route::controller('user/{user}', 'UsersController');


Route::get('test2', function() {
    return view('home');
});

Route::get('test', function(Request $request) {
    //$file = \App\File::file(\Illuminate\Support\Facades\Request::file('file'), \App\UserProfile::first());
    //return  $file;
    return Request::segments();
});
Route::controller('/', 'StaticController');







