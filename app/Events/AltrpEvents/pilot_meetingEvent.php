<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_meeting;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_meetingEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_meeting;

    /**
     * Create a new event instance.
     *
     * @param pilot_meeting $pilot_meeting
     * @return void
     */
    public function __construct(pilot_meeting $pilot_meeting)
    {
        $this->pilot_meeting = $pilot_meeting;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_meeting");
    }
}
