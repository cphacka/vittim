<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_status;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_statusEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_status;

    /**
     * Create a new event instance.
     *
     * @param pilot_status $pilot_status
     * @return void
     */
    public function __construct(pilot_status $pilot_status)
    {
        $this->pilot_status = $pilot_status;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_status");
    }
}
