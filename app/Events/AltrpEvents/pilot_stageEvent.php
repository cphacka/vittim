<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_stage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_stageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_stage;

    /**
     * Create a new event instance.
     *
     * @param pilot_stage $pilot_stage
     * @return void
     */
    public function __construct(pilot_stage $pilot_stage)
    {
        $this->pilot_stage = $pilot_stage;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_stage");
    }
}
