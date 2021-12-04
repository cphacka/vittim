<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_team;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_teamEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_team;

    /**
     * Create a new event instance.
     *
     * @param pilot_team $pilot_team
     * @return void
     */
    public function __construct(pilot_team $pilot_team)
    {
        $this->pilot_team = $pilot_team;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_team");
    }
}
