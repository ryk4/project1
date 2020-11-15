<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct() ----DISABLE required AUTH for home
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //call api get recipes
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

        return view('home', ['recipes' => $collection]);
    }
}
