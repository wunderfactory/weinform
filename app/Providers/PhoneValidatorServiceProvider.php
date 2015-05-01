<?php namespace Wundership\Providers;

use Illuminate\Support\ServiceProvider;

class PhoneValidatorServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app['validator']->extend('phone', 'Wundership\Services\PhoneValidator@phone');
        $this->app['validator']->extend('mobile_phone', 'Wundership\Services\PhoneValidator@mobilePhone');
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
