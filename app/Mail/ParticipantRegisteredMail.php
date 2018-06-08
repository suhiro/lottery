<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Participant;
class ParticipantRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    public $participant;
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    public function build()
    {
        return $this->subject('新人参加抽奖了')->markdown('emails.participantRegistered');
    }
}
