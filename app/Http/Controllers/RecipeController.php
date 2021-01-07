<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\RecipeDetail;
use App\Models\Recipes_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class RecipeController extends Controller
{

    //get all recipes + recipeDetails
    //ADD FILTERING
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
            ->select('recipes.*', 'recipeDetails.*','recipes_categories.categories_id','categories.name','categories.description','categories.representative_color')
            ->whereIn('recipes_categories.categories_id',['1','2','3','4'])//required in recipes page to display 'main' tag
            ->whereIn('recipes.id',$categories->pluck('recipes_id'))
            ->get();


        $collection = CollectionHelper::paginate($recipes, 6);    

        return response($collection, 200);

    }

    
   

    
    

   

   

    //UI (User Interface)

    public function getRecipesFilter()
    {
        return view('recipes/recipes');

    }

    public function recipeAdd()
    {
        return view('recipes/recipeAdd');

    }

    public function recipe($id)
    {
        

        return view('recipes/recipe',['id' => $id]);
    }


}
