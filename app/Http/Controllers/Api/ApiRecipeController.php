<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\RecipeDetail;
use App\Models\Recipes_categories;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RecipePostRequest;
use App\Http\Controllers\CollectionHelper;

class ApiRecipeController extends Controller
{
    //get all recipes + recipeDetails
    //e.g /api/recipes?page=1&order=title&category=Meat
    public function getAllRecipes()
    {

        //find all recipe ID that are allowed after filtering out
        $categories = DB::table('recipes_categories')
            ->join('categories','recipes_categories.categories_id','=','categories.id')
            ->when(request('category'), function ($query, $role) {
                $arr = explode(',', $role); //split category from 1 string into array of strings.
                return $query->whereIn('name', $arr);
            })->get();

        $recipes = DB::table('recipes')
            ->join('recipeDetails', 'recipes.recipeDetails_id', '=', 'recipeDetails.id')
            ->join('recipes_categories','recipes.id','=','recipes_categories.recipes_id')
            ->join('categories','recipes_categories.categories_id','=','categories.id')
            ->select('recipes.*', 'recipeDetails.calories','recipeDetails.cookTime','recipes_categories.categories_id','categories.name',
            'categories.description','categories.representative_color')
            ->whereIn('recipes_categories.categories_id',['1','2','3','4'])//required in recipes page to display 'main' tag
            ->whereIn('recipes.id',$categories->pluck('recipes_id'))//recipe IDs from Query above
            ->when(request('order'), function ($query,$role) {
                
                $order = 'asc';

                //if viewCounter/favouriteCounter needs to be DESC
                if($role == 'viewCounter' || $role == 'favouriteCounter'){
                    $order = 'desc';
                }
              
                return $query->orderBy($role, $order);
            })
            ->get();

        //dd($recipes);

        $collection = CollectionHelper::paginate($recipes, 6);    

        return response($collection, 200);

    }

    //get a single recipe
    public function getRecipe($id)
    {
        if (Recipe::where('id', $id)->exists()) {

            $recipe = DB::table('recipes')
                ->join('recipeDetails', 'recipes.recipeDetails_id', '=', 'recipeDetails.id')
                ->select('recipes.*', 'recipeDetails.calories','recipeDetails.protein','recipeDetails.carbohydrates','recipeDetails.fat'
                ,'recipeDetails.sugar','recipeDetails.servings','recipeDetails.cookTime')
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


        if($request->file('image') != null){
            error_log('image receivede');
            $file = $request->file('image');
            $name = '/images/recipes/' . uniqid() . '.' . $file->extension();
            $file->storePubliclyAs('public', $name);
            $recipe->image = $name;
        }

        $recipe->title = $request->title;
        $recipe->ingredients = $request->ingredients;
        //$recipe->image = $request->image;
        $recipe->steps = $request->steps;
        $recipe->recipeDetails_id = $recipeDetail->id;
        $recipe->save();

        

        //insert to recipies_categories


        foreach (explode(',',$request->categories) as $categoryId) {
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

    //GET all categories info
    public function getCategories(){
        
        //NEEDS TO BE: select  id,name,description,representative_color,(select  count(*) from recipes_categories where categories_id=A.id) as Count from categories A
        $recipes = DB::table('categories')
            ->select('categories.name','categories.description','categories.representative_color',
             DB::raw('(select  count(*) from recipes_categories where categories_id=categories.id) as total'))
            ->whereIn('categories.id',['1','2','3','4']) //exclude optinal categories
            ->get()->toJson(JSON_PRETTY_PRINT);


        return response($recipes, 200);

    }

}
