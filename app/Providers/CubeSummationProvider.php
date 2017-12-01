<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CubeSummation;

class CubeSummationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CubeSummation::class, function ($app) {
            return new CubeSummation();
        });
    }
}
