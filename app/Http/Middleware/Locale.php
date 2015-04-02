<?php namespace App\Http\Middleware;

use App\Services\GeoIP\GeoIPInterface as GeoIP;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;


class Locale {

    protected $geoIP;

    public function __construct(GeoIP $geoIp)
    {
        $this->geoIP = $geoIp;
    }

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
            $language = $this->geoIP->getISOCode();
            Session::set('language', $language);
            App::setLocale($language);
            return $next($request);
        }
        $language = Session::get('language', Config::get('app.locale'));
        App::setLocale($language);

        return $next($request);
    }

}
