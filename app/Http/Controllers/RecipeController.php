<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\RecipeDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class RecipeController extends Controller
{


    //test ===============================================
    public function recipeTest ($id){
        //call api get recipes
      /*  $recipe = app(RecipeController::class)->getRecipe($id); //working


        //check if response is valid
        if($recipe->status() != 200){
            abort(404);
        }


        //convert json response into
        //$content = json_decode($recipe->content());

        $content = json_decode($recipe->content());


        //convert into Recipe Collection
        $collection = \App\Models\Recipe::hydrate($content);


        $collection = $collection->flatten();*/


        return view('recipes/recipeTest');
    }




    


    //get all recipes + recipeDetails
    //ADD FILTERING
    public function getAllRecipes()
    {
        //find all recipe ID that are allowed after filtering out
        $categories = DB::table('recipes_categories')
            ->join('categories','recipes_categories.categories_id','=','categories.id')
            ->when(request('category'), function ($query, $role) {
                //extract several filters
                $arr = explode(',', $role); //split category from 1 string into array of strings.

                return $query->whereIn('name', $arr);
            })->get();

/*
        dd($categories->pluck('id'));

        $collection2 = collect(['product_id' => 1, 'name' => 'Desk', 'price' => 100, 'discount' => false]);

        $filtered2 = $collection2;

        dd($filtered2->only(['product_id', 'name']));
*/
        //dd($categories->pluck('recipes_id'));




        //$recipes = Recipe::get()->toJson(JSON_PRETTY_PRINT); OLD
        $recipes = DB::table('recipes')
            ->join('recipeDetails', 'recipes.recipeDetails_id', '=', 'recipeDetails.id')
            ->select('recipes.*', 'recipeDetails.*')
            ->whereIn('recipes.id',$categories->pluck('recipes_id'))
            ->get()->toJson(JSON_PRETTY_PRINT);


        return response($recipes, 200);

    }

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

    //UI (User Interface)

    public function getRecipesFilter()
    {

        //apply filter into
        $recipes = app(RecipeController::class)->getAllRecipes(); //working


        //check if response is valid
        if($recipes->status() != 200){
            abort(404);
        }


        //convert json response into
        $object = (array)json_decode($recipes->content());

        //convert into Recipe Collection
        $collection = \App\Models\Recipe::hydrate($object);

        //$collection = $collection->flatten(); --OPTIONAL ?????


        //filter + order logic

        //check if request has filter value

       // dd($collection);

        $collection = CollectionHelper::paginate($collection, 6);


        /*if(request()->has('category'))
        {
            $collection = \App\Models\Recipe::where('category',request('category')); //--removes

        }*/

        /*if(request()->has('category'))
        {
            $collection = \App\Models\Recipe::where('category',request('category')); //--removes

        }
        else
        {
            $collection = \App\Models\Recipe::Paginate(9); //--removes

        }*/




        //$collection = Paginator::make($collection, 50, 5);


        return view('recipes/recipes', ['recipes' => $collection]);

    }

    public function recipe($id)
    {

        //call api get recipes
        $recipe = app(RecipeController::class)->getRecipe($id); //working


        //check if response is valid
        if($recipe->status() != 200){
            abort(404);
        }


        //convert json response into
        //$content = json_decode($recipe->content());

        $content = json_decode($recipe->content());



        //convert into Recipe Collection
       // $collection = \App\Models\Recipe::hydrate($content);


       // $collection = $collection->flatten();


        return view('recipes/recipe',['recipe' => $content]);
    }


    //helpper function

    //converts recipe steps markdown to proper HTML
    public function RecipeStepsMarkdown($markdown){

    }

}
