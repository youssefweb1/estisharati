<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $firstName; 

    public function __construct($otp, $firstName) 
    {
        $this->otp = $otp;
        $this->firstName = $firstName;
    }

    public function build()
    {
        return $this->view('emails.otp') 
                    ->subject('كود التحقق الخاص بك ')
                    ->with([
                        'otp' => $this->otp,
                        'firstName' => $this->firstName, 
                    ]);
    }
}
