<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_budget;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_budgetEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_budget;

    /**
     * Create a new event instance.
     *
     * @param pilot_budget $pilot_budget
     * @return void
     */
    public function __construct(pilot_budget $pilot_budget)
    {
        $this->pilot_budget = $pilot_budget;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_budget");
    }
}
