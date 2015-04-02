<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GeoIPServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->bind('App\Services\GeoIP\GeoIPInterface', 'App\Services\GeoIP\GeoIPTorann');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
