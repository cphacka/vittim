<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_identification;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_identificationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_identification;

    /**
     * Create a new event instance.
     *
     * @param pilot_identification $pilot_identification
     * @return void
     */
    public function __construct(pilot_identification $pilot_identification)
    {
        $this->pilot_identification = $pilot_identification;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_identification");
    }
}
