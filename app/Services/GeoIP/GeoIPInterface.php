<?php namespace Wundership\Services\GeoIP;


interface GeoIPInterface {

    public function getISOCode($ip = null);
}