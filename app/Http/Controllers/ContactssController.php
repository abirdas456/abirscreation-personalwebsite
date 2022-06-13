<?php

namespace App\Http\Controllers;
use App\Models\Contactsses;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactssController extends Controller
{
    public function contactssesAdd(Request $request)
    {
        # code...
        //dd('abcd');

        date_default_timezone_set("Asia/Dhaka");

        //getting data from add from
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-Y");

        

        $result = DB::table('contactsses')->insert([
            'name' => $name,
            'email' =>  $email,
            'subject' =>  $subject,
            'message' =>  $message,
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
