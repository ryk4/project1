<?php

namespace App\Providers;

use App\Observers\RecipeObserver;
use App\Models\Recipe;
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
        error_log('registering observers');

        Recipe::observe(RecipeObserver::class);
    }
}
