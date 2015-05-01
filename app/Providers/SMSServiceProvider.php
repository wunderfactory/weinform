<?php namespace Wundership\Providers;

use Illuminate\Support\ServiceProvider;

class SMSServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->bind('Wundership\Services\SMS\SMSInterface','Wundership\Services\SMS\SMSTwilio');
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
