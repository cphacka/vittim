<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_event;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_eventEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_event;

    /**
     * Create a new event instance.
     *
     * @param pilot_event $pilot_event
     * @return void
     */
    public function __construct(pilot_event $pilot_event)
    {
        $this->pilot_event = $pilot_event;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_event");
    }
}
