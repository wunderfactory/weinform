<?php namespace App\Services\GeoIP;


interface GeoIPInterface {

    public function getISOCode($ip = null);
}