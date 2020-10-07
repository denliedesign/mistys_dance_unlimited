<?php

namespace App\Providers;

use App\Update;
use App\User;
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
        view()->composer('*',function($view) {
            $view->with('users', User::all());
        });

        view()->composer('*',function($view) {
            $view->with('updates', Update::all());
        });
    }
}
