<?php namespace Wundership\Services\GeoIP;

use Torann\GeoIP\GeoIPFacade as GeoIP;
class GeoIPTorann implements GeoIPInterface{

    public function getISOCode($ip = null)
    {
        $location = null;
        if($ip) {
            $location = GeoIP::getLocation($ip);
        } else {
            $location = GeoIP::getLocation();
        }
        return strtolower($location['isoCode']);
    }
}