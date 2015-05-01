<?php namespace Wundership\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Driver {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if(Auth::user() && Auth::user()->driver){
            return $next($request);
        }
        if(Auth::user()) {
            return redirect('user/'.Auth::user()->username.'/driver/create');
        }
		return redirect('auth/login');
	}

}
