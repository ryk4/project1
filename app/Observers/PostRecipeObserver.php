<?php

namespace App\Observers;

use App\Models\Recipe;

class PostRecipeObserver
{
    /**
     * Handle the recipe "created" event.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return void
     */
    public function created(Recipe $recipe)
    {
        //
    }

    /**
     * Handle the recipe "updated" event.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return void
     */
    public function updated(Recipe $recipe)
    {
        //
    }

    /**
     * Handle the recipe "deleted" event.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return void
     */
    public function deleted(Recipe $recipe)
    {
        //
    }

    /**
     * Handle the recipe "restored" event.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return void
     */
    public function restored(Recipe $recipe)
    {
        //
    }

    /**
     * Handle the recipe "force deleted" event.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return void
     */
    public function forceDeleted(Recipe $recipe)
    {
        //
    }
}
