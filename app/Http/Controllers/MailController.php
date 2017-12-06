<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    
    public function sendmail($template,$data,$subject)
    {
    	 Mail::send('email.email', $data, function($message) use($data){
                $message->to($data['email']);
                $message->subject('Registration Confirmation');
            });
    }



}
