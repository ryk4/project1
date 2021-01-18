<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\RecipeDetail;
use App\Models\Recipes_categories;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RecipePostRequest;

class ApiRecipeController extends Controller
{
    //get a single recipe
    public function getRecipe($id)
    {
        if (Recipe::where('id', $id)->exists()) {

            $recipe = DB::table('recipes')
                ->join('recipeDetails', 'recipes.recipeDetails_id', '=', 'recipeDetails.id')
                ->select('recipes.*', 'recipeDetails.*')
                ->where('recipes.id', $id)
                ->get();

           // dd(json_encode($recipe->first()));
            return response(json_encode($recipe->first()), 200);
        } else {
            return response()->json([
                "message" => "Recipe not found"
            ], 404);
        }
    }

    //get tags for specific recipe
    public static function getRecipeTags($id){
        if (Recipe::where('id', $id)->exists()) {

            $recipe = DB::table('recipes_categories')
                ->join('categories', 'recipes_categories.categories_id', '=', 'categories.id')
                ->select('categories.name', 'categories.description','categories.representative_color')
                ->where('recipes_categories.recipes_id', $id)
                ->get()->toJson(JSON_PRETTY_PRINT);

            return response($recipe, 200);
        } else {
            return response()->json([
                "message" => "Recipe not found for id supplied: ".$id
            ], 404);
        }
    }

    //create a single recipe
    public function createRecipe(RecipePostRequest $request)
    {
        
        //validates in RecipePostRequest


        //insert image into public folder

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

        /*if($request->image != null){
            $file = $request->image->store('public/images');

            $image_uploaded_path = $image->store($uploadFolder, 'public');


            $recipe->image = 'no longer default pal';
        }*/

        //insert to recipies_categories
        
        foreach ($request->categories as $categoryId) {
            $categories = new recipes_categories;

            $categories->recipes_id = $recipe->id;
            $categories->categories_id = $categoryId;
            $categories->save();
        }

        //build response
        return response()->json([
            "message" => "Recipe has been created" //ADD with the following properties
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
                "message" => "Recipe with id:".$id." not found."
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
                "message" => "Record has been deleted"
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
