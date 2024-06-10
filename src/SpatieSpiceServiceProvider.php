<?php

namespace MrArsal4u\StripeSpice;

use Illuminate\Support\ServiceProvider;

class SpatieSpiceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish the view
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/spatie_spice'),
        ], 'views');

        // Load the views
        $this->loadViewsFrom(__DIR__ . '/views', 'spatie_spice');
    }

    public function register()
    {
        // Register any package-specific services
    }
}
