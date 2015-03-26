<?php namespace App\Http\Middleware;

use App\Log;
use Auth;
use Closure;
use Illuminate\Contracts\Routing\TerminableMiddleware;

class Logging implements TerminableMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		return $next($request);
	}

    /**
     * Perform any final actions for the request lifecycle.
     *
     * @param  \Symfony\Component\HttpFoundation\Request $request
     * @param  \Symfony\Component\HttpFoundation\Response $response
     * @return void
     */
    public function terminate($request, $response)
    {
       if (Auth::user()) {
           Log::create(array('user_id' => Auth::user()->id, 'path' => $request->path(), 'ip' => $request->ip()));
       } else {
           Log::create(array( 'path' => $request->path(), 'ip' => $request->ip()));
       }
    }
}
