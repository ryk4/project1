<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\RecipeDetail;
use Illuminate\Http\Request;


class RecipeController extends Controller
{

    //get all recipes
    public function getAllRecipes() {
        $recipes = Recipe::get()->toJson(JSON_PRETTY_PRINT);
        return response($recipes, 200);

    }

    //get a single recipe
    public function getRecipe($id)
    {
        if (Recipe::where('id', $id)->exists()) {
            $recipe = Recipe::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($recipe, 200);
        } else {
            return response()->json([
                "message" => "Recipe not found"
            ], 404);
        }
    }

    //create a single recipe
    public function createRecipe(Request $request)
    {
        //create details first since it has FK in Recipe

        $recipeDetail = new RecipeDetail();
        $recipeDetail->calories = $request->calories;
        $recipeDetail->protein = $request->protein;
        $recipeDetail->carbohydrates = $request->carbohydrates;
        $recipeDetail->fat = $request->fat;

        $recipeDetail->save();

        //create Recipe model
        $recipe = new Recipe;
       // $recipe->id =  Integer::random(7);

        $recipe->title = $request -> title;
        $recipe->ingredients = $request -> ingredients;
        $recipe->image = $request -> image;
        $recipe->tags = $request -> tags;
        $recipe->steps = $request -> steps;
        $recipe->recipeDetails_id = $recipeDetail->id;
        $recipe->save();

        //return a valid response
        return response()->json([
            "message" => "recipe created"
        ], 201);

    }

    //update a single recipe
    public function updateRecipe(Request $request,$id)
    {
        if(Recipe::where('id', $id)->exists())//check if id exists in db
        {
            $recipe = Recipe::find($id);

            if (!is_null($request->title)) {
                $recipe->title = $request->title;
            }
            if (!is_null($request->ingredients)) {
                $recipe->ingredients = $request->ingredients;
            }
            $recipe->save();

            return response()->json([
                "message" => "recipe has been updated"
            ], 200);
        }
        else {
            return response()->json([
                "message" => "Incorrect RecipeID"
            ], 404);
        }


    }

    //delete a single recipe
    public function deleteRecipe($id)
    {
        if(Recipe::where('id',$id)->exists())
        {
            $recipe = Recipe::find($id);
            $recipe->delete();

            return response()->json([
                "message" => "Records deleted"
            ], 202);
        }
        else
        {
            return response()->json([
                "meesage" => "Recipe with id:".$id." not found."
            ],404);
        }
    }
}