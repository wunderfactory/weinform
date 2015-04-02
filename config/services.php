<?php
return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],
    'facebook' => [
        'client_id' => env('FB_APPID', '421219101393487'),
        'client_secret' => env('FB_SECRET', 'af7c60b1ac8df3ab135cb3786a3390e9'),
        'redirect' => 'test'/*url('auth/facebook-return')*/,
    ],

];
