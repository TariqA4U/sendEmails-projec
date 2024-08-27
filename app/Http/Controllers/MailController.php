<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // step 1
use App\Mail\WelcomeEmail; // step 2

class MailController extends Controller
{
    function sendEmail(Request $request){
    //    $to =  "tariqameenofficials@gmail.com";
       $to = $request->to;
       $msg = "dummy mail message bu tariq";
    //    $subject = "subject of email";
       $subject =$request->subject;
       Mail::to($to)->send(new WelcomeEmail($msg,$subject));
       return "email sent successfully";
    }
   
}
