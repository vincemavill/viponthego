<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\client_inquiry;
use DB;

class contact_controller extends Controller
{
    public function inquiry_send(Request $form){
    	
       Mail::send(new client_inquiry());
     	// echo $client_name = $form->input('fullname');
      //   echo $client_email = $form->input('email');
      //   echo $phone = $form->input('contactno');
      //   echo $message = $form->input('message');

        
        echo "last part";

    }

    // public function send(){
    	
    //    Mail::send(new client_inquiry());

        
    //     echo "last part";

    // }
}
