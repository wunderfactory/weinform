<?php namespace App\Providers;

use App\Services\Facebook;
use Illuminate\Support\ServiceProvider;
class FacebookServiceProvider extends ServiceProvider {

    public function register()
    {
       $this->app->singleton('facebook', function()
        {
            return new Facebook(url('auth/facebook-return'));
        });
    }
}