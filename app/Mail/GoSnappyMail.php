<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GoSnappyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $participant,$message;
    public function __construct($participant,$message)
    {
        $this->participant = $participant;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.gosnappy');
    }
}
