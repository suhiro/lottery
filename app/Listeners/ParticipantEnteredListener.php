<?php

namespace App\Listeners;

use App\Events\ParticipantEntered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ParticipantRegisteredMail;
use App\Mail\GoSnappyMail;
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
        Mail::to('suhiro@gmail.com')->cc(['haga.gu@magicnoodle.ca','hiro.su@magicnoodle.ca'])->send(new ParticipantRegisteredMail($event->participant));

        $res = GoSnappy::pushCustomer($event->participant);
        if($res->getStatusCode() == '200'){
        	$message = json_decode($res->getBody());
        } else {
        	$message = "API to GoSnappy error";
        }
        Mail::to('suhiro@gmail.com')->send(new GoSnappyMail($event->participant,$message));
    }
}
