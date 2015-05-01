<?php namespace Wundership\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Support\Facades\Session;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
        'LucaDegasperi\OAuth2Server\Middleware\OAuthExceptionHandlerMiddleware',
        'Wundership\Http\Middleware\Logging',
        'Wundership\Http\Middleware\Locale',
        'Wundership\Http\Middleware\NoProfile',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => 'Wundership\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'csrf' =>'Wundership\Http\Middleware\VerifyCsrfToken',
		'guest' => 'Wundership\Http\Middleware\RedirectIfAuthenticated',
        'driver' => 'Wundership\Http\Middleware\Driver',
        'notDriver' => 'Wundership\Http\Middleware\NotDriver',
        'user' => 'Wundership\Http\Middleware\User',
	];

}
