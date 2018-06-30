<?php

namespace App\Providers;

use App\Library\SpotifyService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Library\SpotifyService', function(){
            return new SpotifyService();
        });

        class_alias('App\Facades\SpotifyService', 'SpotifyService');
    }
}
