<?php

namespace App\Providers;
use Auth;
use View;
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
       view()->composer('*', function ($view) {
            if(Auth::check()){
                $view->with('auth', Auth::user());
            }
        });
    }
}
