<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class contactMail extends Controller
{
    public function __construct() {

      $this->middleware('auth');
    }

    public function contact() {

        return view('contactMail');
    }

    public function mail(Request $request) {

      $user = Auth::user();
      
      $data = [
              'subject' => $request->subject,
              'msg' => $request->message,
        ];
    
           
         mail::send('email.contact', $data, function($message) {
             $message->to('nour-ja19@hotmail.fr','narnour')->subject('User contact');
           
         });
       
      

  }
}
