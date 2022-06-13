<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact()
    {
        # code...
        return view('frontend.contact');
    }
}
