<?php namespace Robinncode\Laradmin;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/all.php');
        $this->loadViewsFrom(__DIR__.'/views', 'template');
        /*$this->publishes([
            __DIR__.'/public' => public_path('robinncode/'),
        ], 'public');*/
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
    }
}