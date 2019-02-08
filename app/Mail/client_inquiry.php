<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


use Illuminate\Http\Request;

class client_inquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $form)
    {


        $client_name = $form->input('fullname');
        $client_email = $form->input('email');
        $phone = $form->input('contactno');
        $client_message = $form->input('message');

        // // $admin_email = "mindfoxwebsite@gmail.com";
        $admin_email = "info@viponthego.com";
      
        return $this->view('client_mail', compact('client_name','client_email','phone','client_message'))->to($admin_email)->from('contactpage@viponthego.com')->subject('Inquiry');

        // return $this->view('client_mail')->with('client_email','client_name','phone','message')->to($admin_email)->from('vincetesting07@gmail.com')->subject('Inquiry');


    }
}
