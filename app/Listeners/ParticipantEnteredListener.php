<?php

namespace App\Listeners;

use App\Events\ParticipantEntered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ParticipantRegisteredMail;
use App\Mail\GoSnappyMail;
use App\Mail\ParticipantNotifyMail;
use Illuminate\Support\Facades\Mail;
use App\GoSnappy;

class ParticipantEnteredListener implements ShouldQueue
{
    
    public function __construct()
    {
        //
    }

    public function handle(ParticipantEntered $event)
    {
        Mail::to('suhiro@gmail.com')->cc(['info@magicnoodle.ca'])->send(new ParticipantRegisteredMail($event->participant));
        Mail::to($event->participant)->send(new ParticipantNotifyMail($event->participant));

        $res = GoSnappy::pushCustomer($event->participant);
        // if($res->getStatusCode() == '200'){
        // 	$message = json_decode($res->getBody());
        // } else {
        // 	$message = "API to GoSnappy error";
        // }
        // Mail::to('suhiro@gmail.com')->send(new GoSnappyMail($event->participant,$message));
    }
}
