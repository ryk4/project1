<?php

namespace App\Observers;

use App\Models\Recipe;
use App\Models\RecipeDetail;
use App\Models\Recipes_categories;


class RecipeObserver
{
    /**
     * Handle the recipe "created" event.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return void
     */
    public function created(Recipe $recipe)
    {

        error_log('actual recipe observer');


        //create details first since it has FK in Recipe
        /*
        $recipeDetail = new RecipeDetail();
        $recipeDetail->calories = $request->calories;
        $recipeDetail->protein = $request->protein;
        $recipeDetail->carbohydrates = $request->carbohydrates;
        $recipeDetail->fat = $request->fat;
        $recipeDetail->sodium = $request->sodium;
        $recipeDetail->fiber = $request->fiber;
        $recipeDetail->sugar = $request->sugar;
        $recipeDetail->servings = $request->servings;
        $recipeDetail->cookTime = $request->cookTime;

        $recipeDetail->save();

        //create Recipe model
        $recipe = new Recipe;

        $recipe->title = $request->title;
        $recipe->ingredients = $request->ingredients;
        $recipe->image = $request->image;
        $recipe->steps = $request->steps;
        $recipe->recipeDetails_id = $recipeDetail->id;
        $recipe->save();

        //insert to recipies_categories
        foreach ($request->categories as $categoryId) {
            $categories = new recipes_categories;

            $categories->recipes_id = $recipe->id;
            $categories->categories_id = $categoryId;
            $categories->save();
        }*/
    }

    /**
     * Handle the recipe "updated" event.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return void
     */
    public function updated(Recipe $recipe)
    {
        error_log('update recipe observer');


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
