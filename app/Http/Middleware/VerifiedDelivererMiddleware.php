<?php namespace Wundership\Http\Middleware;

use Closure;

class VerifiedDelivererMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user = $request->user();
		if($user->verification && $user->verification->verified)
		{
			return $next($request);
		}
		else
		{
			return redirect('/'); //TODO route ändern
		}
	}

}
