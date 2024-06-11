<?php

namespace MrArsal4u\StripeSpice;

use Illuminate\Support\ServiceProvider;

class SpatieSpiceServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish the view
        $this->publishes([
            __DIR__ . '/views' => resource_path('views'),
        ], 'spatie-spice-views');

        // Publish the model
        $this->publishes([
            __DIR__ . '/Models' => app_path('Models'),
        ], 'spatie-spice-models');

        // Publish public JS files
        $this->publishes([
            __DIR__ . '/Public/js' => public_path('js'),
        ], 'spatie-spice-public');

        // Publish interfaces
        $this->publishes([
            __DIR__ . '/Contracts' => app_path('Contracts'),
        ], 'spatie-spice-Contracts');

        // Publish migrations
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'spatie-spice-migrations');

        // Publish seeders
        $this->publishes([
            __DIR__ . '/database/seeders' => database_path('seeders'),
        ], 'spatie-spice-seeders');

        // Publish config files
        $this->publishes([
            __DIR__ . '/config' => config_path(),
        ], 'spatie-spice-config');

        // Composite tag to publish all
        $this->publishes([
            __DIR__ . '/views' => resource_path('views'),
            __DIR__ . '/Models' => app_path('Models'),
            __DIR__ . '/Public/js' => public_path('js'),
            __DIR__ . '/Contracts' => app_path('Contracts'),
            __DIR__ . '/database/migrations' => database_path('migrations'),
            __DIR__ . '/database/seeders' => database_path('seeders'),
            __DIR__ . '/config' => config_path(),
        ], 'spatie-spice-all');

        // Load the views
        $this->loadViewsFrom(__DIR__ . '/views', 'spatie_spice');

        // Load the migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {
        // Register any package-specific services or configurations
    }
}
