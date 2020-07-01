<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $firstname = $request->first_name;
        $lastname = $request->last_name;
        return view('welcome', [
            'firstname' => $firstname,
            'lastname' => $lastname
        ]);
    }
}
