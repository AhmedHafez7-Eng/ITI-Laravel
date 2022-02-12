<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailInfo;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailInfo)
    {
        //
        $this->mailInfo = $mailInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ahmed.hafez101112131415@gmail.com')
            ->subject('Mail from Ahmed Hafez')
            ->with('mailInfo', $this->mailInfo)
            ->view('emails.myTestMail');
    }
}