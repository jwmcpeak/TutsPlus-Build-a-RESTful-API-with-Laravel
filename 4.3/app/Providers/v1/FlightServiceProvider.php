<?php

namespace App\Providers\v1;

use App\Services\v1;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class FlightServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('flightstatus', function($attribute, $value, $parameters, $validator) {
                return $value == 'ontime' || $value == 'delayed';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FlightService::class, function($app) {
            return new FlightService();
        });
    }
}
