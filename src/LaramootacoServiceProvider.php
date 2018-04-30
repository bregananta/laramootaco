<?php

namespace Bregananta\Laramootaco;

use Illuminate\Support\ServiceProvider;

class LaramootacoServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
	    $this->publishes([
		    __DIR__ . '/config/config.php' => config_path('moota.php'),
	    ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
	    $this->app->bind('moota', function() {
		    return new Moota;
	    });
    }
}