<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') === 'heroku') {
        $this->app['request']->server->set('HTTPS', true);
        Validator::extend('current_password_match', function($attribute, $value, $parameters, $validator) {
            return Hash::check($value, Auth::user()->password);
        });
		}
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
