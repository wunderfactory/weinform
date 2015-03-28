<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Torann\GeoIP\GeoIPFacade as GeoIP;


class Locale {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
    {
        if(!Session::has('language')) {
            $location = GeoIP::getLocation();
            $language = strtolower($location['isoCode']);
            Session::set('language', $language);
            App::setLocale($language);
            return $next($request);
        }
        $language = Session::get('language', Config::get('app.locale'));
        App::setLocale($language);

        return $next($request);
    }

}
