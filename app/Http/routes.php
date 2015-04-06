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
});
Route::get('test', function() {
    return view('chat.index');
});
Route::controller('/', 'StaticController');