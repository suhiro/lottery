<?php

namespace App\Listeners;

use App\Events\ParticipantEntered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParticipantEnteredListener implements ShouldQueue
{
    
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ParticipantEntered  $event
     * @return void
     */
    public function handle(ParticipantEntered $event)
    {
        //
    }
}
