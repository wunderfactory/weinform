<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SMSServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->app->bind('App\Services\SMS\SMSInterface','App\Services\SMS\SMSTwilio');
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
