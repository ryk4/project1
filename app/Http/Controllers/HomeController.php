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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //call api get recipes
        $recipes = Recipe::get();
        //$recipes = DB::table('recipes')->get();

        //return recipes model to view

        //dd($recipes);

        return view('home', ['recipes' => $recipes]);
    }
}
