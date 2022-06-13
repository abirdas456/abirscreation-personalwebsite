<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function subscribeAdd(Request $request)
    {
        # code...
        //dd('abcd');

        date_default_timezone_set("Asia/Dhaka");

        //getting data from add from
        $email = $request->email;
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-Y");

        $result = DB::table('subscribes')->insert([
            'email' =>  $email,
            'contact_time' => $contact_time,
            'contact_date' => $contact_date
        ]);
        if($result){
            return redirect()-> route('home');
        }
        else{
            return redirect()-> route('home');

        }
    }
}
