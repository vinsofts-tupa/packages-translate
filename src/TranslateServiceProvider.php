<?php

namespace Tupa\Translate;

use Illuminate\Support\ServiceProvider;

class TranslateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        include __DIR__.'/models/Translate.php';
        include __DIR__.'/controllers/TranslateController.php';
        $this->publishes([__DIR__.'/public/vendors' => public_path('vendors'),], 'vendors');
        $this->publishes([__DIR__.'/public/build' => public_path('build'),], 'build');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Tupa\Translate\TranslateController');
        $this->loadViewsFrom(__DIR__.'/views', 'languages');
    }
}
