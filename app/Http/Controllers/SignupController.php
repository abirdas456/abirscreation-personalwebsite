<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function signup()
    {
        # code...
        return view('frontend.signup');
    }
}
