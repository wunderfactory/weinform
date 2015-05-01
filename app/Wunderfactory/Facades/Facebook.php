<?php namespace Wundership\Wunderfactory\Facades;


use Illuminate\Support\Facades\Facade;

class Facebook extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'facebook';
    }
}