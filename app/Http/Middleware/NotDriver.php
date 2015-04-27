<?php namespace Wundership\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class NotDriver {

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
            return redirect('overview');
        }
		return $next($request);
	}

}
