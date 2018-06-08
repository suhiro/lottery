<?php

namespace App\Listeners;

use App\Events\ParticipantEntered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ParticipantRegisteredMail;
use Illuminate\Support\Facades\Mail;

class ParticipantEnteredListener implements ShouldQueue
{
    
    public function __construct()
    {
        //
    }

    public function handle(ParticipantEntered $event)
    {
        Mail::to('suhiro@gmail.com')->cc(['haga.gu@magicnoodle.ca','hiro.su@magicnoodle.ca'])->send(new ParticipantRegisteredMail($event->participant));
    }
}
