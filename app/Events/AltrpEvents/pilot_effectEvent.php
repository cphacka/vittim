<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_effect;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_effectEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_effect;

    /**
     * Create a new event instance.
     *
     * @param pilot_effect $pilot_effect
     * @return void
     */
    public function __construct(pilot_effect $pilot_effect)
    {
        $this->pilot_effect = $pilot_effect;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_effect");
    }
}
