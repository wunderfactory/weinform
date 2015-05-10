<?php namespace Wundership\Providers;

use Wundership\User;
use Wundership\VerifiedEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        if ($this->app->runningInConsole()) return;
		Validator::extend('user', function($attribute, $value, $parameters)
        {
            if(VerifiedEmail::where('email', $value)/*->where('verified', true)*/->count() > 0 || User::where('username', $value)/*->whereHas('emails', function($q)
                {
                    $q->where('verified', true);

                })*/->count() > 0) {
                return true;
            }
            return false;
        });
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'Wundership\Services\Registrar'
		);
		$this->app->bind(
            'Wundership\Services\Chat\ChatInterface',
            'Wundership\Services\Chat\Chat'
        );
		$this->app->bind(
            'Wundership\Services\Chat\UserInterface',
            'Wundership\Services\Chat\User'
        );
		$this->app->bind(
            'Evenement\EventEmitterInterface',
            'Evenement\EventEmitter'
        );
        $this->app->bind(
            'Evenement\EventEmitterInterface',
            'Evenement\EventEmitter'
        );
        $this->app->bind(
            'Wundership\Services\ProfilerContract',
            'Wundership\Services\Profiler'
        );
	}

}
