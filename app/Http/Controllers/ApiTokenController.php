<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiTokenController extends Controller
{
    //
    public function generateToken(Request $request)
    {
        //validate if the $request is coming from authenticated user

        $token = Str::random(60);

        $request->user()->forceFill([
            'api_token' => $token,
        ])->save();

        //return ['token' => $token];
        return view ('home',['token' => $token]);
    }


}
