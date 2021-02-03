<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    //GET
    public function adminDashboard(){

        $user = auth()->user();


        
        ///dd($user);

        return view('pages/admin',[
            'token' => $user->api_token,
            'username' => $user->email,
        ]);
    }
}
