<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailVerificationCode extends Mailable
{
    use Queueable, SerializesModels;


    public  $username;
    public  $user;
    public $user_id;
    public  $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$user,$user_id,$token)
    {
        $this->username = $username;
        $this->user=$user;
        $this->user_id = $user_id;
        $this->token = $token;

        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('corporate@uptrendly.com')
            ->view('email.sendEmailVerificationCode');
    }
}
