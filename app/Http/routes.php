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

Route::post('oauth/token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

include("routes/tour.php");
include("routes/shipments.php");

Route::group(['prefix' => 'api/v1/', 'before' => 'oauth'], function(){
    Route::resource('users', 'api\v1\UsersController');
});

Route::group(['middleware' => ['csrf']], function(){
    Route::get('/button', function(){
        return View::make('test');
    });
    Route::post('/test', function(){
        $input = Input::all();
        return $input;
    });
    Route::get('/rate', function(){
        $user = Auth::user();
        return View::make('actions.rate')->with(['user' => $user]);
    });
    Route::get('/yourdeliveries', function(){
        $user = Auth::user();
        return View::make('dashboard.carry.index')->with(['user' => $user]);
    });
    Route::get('/yourpackages', function(){
        $user = Auth::user();
        return View::make('dashboard.send.index')->with(['user' => $user]);
    });
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
    Route::group(['prefix' => 'user/{user}/settings/'], function()
    {
        Route::controller('profile',        'SettingsProfileController');
        Route::controller('account',        'SettingsAccountController');
        Route::controller('verify',   'SettingsVerificationController');
    });
    Route::controller('user/{user}', 'UsersController');
    Route::controller('user/{user}/driver', 'DriverController');
    Route::controller('/', 'StaticController');
});