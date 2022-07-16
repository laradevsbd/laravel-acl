<?php

namespace Laradevsbd\Acl;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LaradevsbdAclServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
    {
        $this->registerRoutes();

        $this->mergeConfigFrom(
            __DIR__.'/config/laradevsbd_acl.php', 'laradevsbd_acl'
        );

        $this->loadViewsFrom(__DIR__.'/resources/views', 'acl');

        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/config/laradevsbd_acl.php' => config_path('laradevsbd_acl.php'),
            __DIR__.'/views' => resource_path('views/vendor/acl'),
        ]);

        $this->loadViewComponentsAs('acl', [
            Alert::class,
          ]);

          if ($this->app->runningInConsole()) {
        
            // Publish css file
            $this->publishes([
                __DIR__.'/resources/assets' => public_path('acl'),
              ], 'assets');

            // Publish view components
            $this->publishes([
                __DIR__.'/src/View/Components/' => app_path('View/Components'),
                __DIR__.'/resources/views/components/' => resource_path('views/components'),
            ], 'view-components');
          }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // 
       
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('laradevsbd_acl.prefix'),
            'middleware' => config('laradevsbd_acl.middleware'),
        ];
    }
}
