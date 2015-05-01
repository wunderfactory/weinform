<?php namespace Wundership\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class NoProfile {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (Auth::user() && !Auth::user()->profile && $request->fullUrl() != action('SettingsProfileController@getIndex', [Auth::user()->username]) && ($request->fullUrl() != action('SettingsProfileController@putUpdateProfile', [Auth::user()->username])) ) {
            return redirect()->action('SettingsProfileController@getIndex', [Auth::user()->username]);
        }
		return $next($request);
	}

}
