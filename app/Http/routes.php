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




