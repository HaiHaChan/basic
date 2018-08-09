<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Eloquent\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.user.header', function ($view) {
            $view->with('categories', Category::getCategories());
        });
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
