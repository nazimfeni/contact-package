<?php

namespace Bionictechbd\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * This method is called after all service providers have been registered.
     */
    public function boot()
    {
        // Load routes from the specified file.
        // These routes will be automatically added to the application's routing.
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load views from the specified directory.
        // 'contact' is the namespace for these views, which allows easy referencing in the application.
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');

        // Load migrations from the specified directory.
        // These migrations will be registered and can be run with Artisan commands.
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Merge the custom configuration file with the application's configuration.
        // This ensures the custom configuration is available in the app using the 'contact' key.
        $this->mergeConfigFrom(
            __DIR__ . '/config/Contact.php', // Path to the package's config file.
            'contact'                       // Key used to access this configuration in the app.
        );

        // Publish files to the main application when running `artisan vendor:publish`.
        // This allows the user to override the package's config and views.
        $this->publishes([
            // Publish the package's config file to the application's config directory.
            __DIR__ . '/config/contact.php' => config_path('contact.php'),

            // Publish the package's views to the application's resource directory.
            __DIR__ . '/views' => resource_path('views/vendor/contact'),
        ]);
    }

    /**
     * Register any application services.
     * This method is used to bind services into the service container.
     */
    public function register()
    {
        // Currently empty, but you can use this method to register bindings,
        // singletons, or other services that the package provides.
    }
}

