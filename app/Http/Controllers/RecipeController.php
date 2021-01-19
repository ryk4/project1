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
