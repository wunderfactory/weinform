<?php namespace Wundership\Providers;

use Illuminate\Support\ServiceProvider;

class GeoIPServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->bind('Wundership\Services\GeoIP\GeoIPInterface', 'Wundership\Services\GeoIP\GeoIPTorann');
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
