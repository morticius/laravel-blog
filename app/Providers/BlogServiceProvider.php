<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->topMenu();
    }

    //Top menu for users
    public function topMenu()
    {
        View::composer('layouts.header', function ($view) {
            $view->with('categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());
        });
    }
}
