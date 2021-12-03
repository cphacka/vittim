<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_project;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_projectEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_project;

    /**
     * Create a new event instance.
     *
     * @param pilot_project $pilot_project
     * @return void
     */
    public function __construct(pilot_project $pilot_project)
    {
        $this->pilot_project = $pilot_project;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_project");
    }
}
