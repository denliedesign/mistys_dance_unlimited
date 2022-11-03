<?php

namespace App\Providers;

use App\Fest;
use App\Student;
use App\Update;
use App\User;
use App\Video;
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
//        view()->composer('*',function($view) {
//            $view->with('students', Student::all());
//        });
        view()->composer('*',function($view) {
            $view->with('users', User::all());
        });

        view()->composer('*',function($view) {
            $view->with('updates', Update::all());
        });

        view()->composer('*',function($view) {
            $view->with('fests', Fest::all());
        });
        view()->composer('*',function($view) {
            $view->with('videos', Video::all());
        });
    }
}
