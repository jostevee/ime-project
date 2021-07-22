<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
         /* FIRST APPROACH */
        
         if($this->app->environment('production')){
            //\URL::forceScheme('https');
            \URL::forceScheme('https');
        }
    }
}
