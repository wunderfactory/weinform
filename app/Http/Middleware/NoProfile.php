<?php namespace App\Http\Middleware;

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
        if (Auth::user() && !Auth::user()->profile && $request->fullUrl() != action('ProfileController@create', [Auth::user()->username]) && ($request->fullUrl() != action('ProfileController@store', [Auth::user()->username]) && $request->method() != 'POST') ) {
            return redirect()->action('ProfileController@update', [Auth::user()->username, 1]);
        }
		return $next($request);
	}

}
