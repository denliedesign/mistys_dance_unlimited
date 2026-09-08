<?php

namespace App\Providers;

use App\Article;
use App\Community;
use App\Fest;
use App\Post;
use App\Update;
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
        // Only fetch collections for templates that actually use them. A wildcard
        // composer repeats every query for every partial and anonymous component.
        view()->composer(['posts._old-show', 'posts._old-index'], function ($view) {
            $view->with('posts', Post::all());
        });

        view()->composer(['saferstudiobanner', 'saferstudiopolicy.archive'], function ($view) {
            $view->with('updates', Update::all());
        });

        view()->composer('mdu-fest', function ($view) {
            $view->with('fests', Fest::all());
        });
        view()->composer('articles.index', function ($view) {
            $view->with('articles', Article::all());
            $view->with('videos', Video::all());
        });
        view()->composer('communities.index', function ($view) {
            $view->with('communities', Community::all());
        });
    }
}
