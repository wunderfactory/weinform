<?php namespace Wundership\Http\Middleware;

use Closure;

class BadRatedDelivererMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		//TODO handling
		return $next($request);
	}

}
