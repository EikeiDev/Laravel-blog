<?php

namespace App\Providers;

use App\Post;
use App\Category;
use App\Comment;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('pages._sidebar', function ($view) {
           $view->with('popularPosts', Post::getPopularPosts());
           $view->with('featuredPosts', Post::getFeaturedPosts());
           $view->with('recentPosts', Post::getRecentPosts());
           $view->with('categoryes', Category::all());
        });

        view()->composer('admin._sidebar', function ($view) {
            $view->with('newCommentsCount', Comment::where('status', 0)->count());
        });
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
