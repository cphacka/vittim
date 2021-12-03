<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\startup_technology;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class startup_technologyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $startup_technology;

    /**
     * Create a new event instance.
     *
     * @param startup_technology $startup_technology
     * @return void
     */
    public function __construct(startup_technology $startup_technology)
    {
        $this->startup_technology = $startup_technology;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.startup_technology");
    }
}
