<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
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


    //UI
    public function index()
    {
        //call api get recipes
      /*  $recipes = app(RecipeController::class)->getAllRecipes(); //working


        //check if response is valid
        if($recipes->status() != 200){
            abort(404);
        }


        //convert json response into
        $object = (array)json_decode($recipes->content());

        //convert into Recipe Collection

        $popularCollection= \App\Models\Recipe::hydrate($object)->slice(0,3); //top 3popular
        $newCollection = \App\Models\Recipe::hydrate($object)->slice(0,4); //top 4 new
*/
        //$collection = $collection->flatten(); --OPTIONAL ?????

        //return view('home', ['recipesNew' => $newCollection,'recipesPopular' => $popularCollection]);
        return view('home');
    }

    public function contactPage(){

        return view('pages/contact');
    }

    //tests
    public function homeTest(){

        return view('homeTest');
    }



    //API

    //'contact us' page send email
    public function sendEmail(Request $request)
    {
       // dd($request->all());//check if data from view exists and is valid

        $subject = 'Contact US Page';
        //send the actual email
        $data = array(
            'subject' => $subject,
            'name'=> $request -> name,
            'email'=> $request -> email,
            'comment' => $request -> comment);

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('foodlifting.contact@gmail.com', 'Tutorials Point')->subject
            ('Contact US Page');
            $message->from('foodlifting.contact@gmail.com','rytis kli');
        });


        //return a valid response
        return response()->json([
            "message" => "email sent"
        ], 201);


    }
}
