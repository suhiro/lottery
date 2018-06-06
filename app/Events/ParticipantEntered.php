<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Participant;
class ParticipantEntered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $participant;
    public function __construct(Participant $participant)
    {
        $this->participant = $perticipant;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
