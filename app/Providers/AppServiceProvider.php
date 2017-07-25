<?php

namespace App\Providers;

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
        //set archive variable
        view()->composer('posts.sidebar',function ($view)
        {
            $view
            ->with('archives', \App\Post::archives());

        });

        // set enums variable
        view()->composer('traces.trialindex',function ($view2)
        {
            $view2
            ->with('enums', \App\SetOne::all());

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
