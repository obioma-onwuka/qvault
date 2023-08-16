<?php


// app/Mail/WelcomeEmail.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class WelcomeEmail extends Mailable{

    use Queueable, SerializesModels;

    public $user;

    public function __construct($user){

        $this->user = $user;

    }

    public function build(){

        return $this->view('layouts.emails.otpsent');

    }

}
