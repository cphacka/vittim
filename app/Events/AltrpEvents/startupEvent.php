<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\startup;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class startupEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $startup;

    /**
     * Create a new event instance.
     *
     * @param startup $startup
     * @return void
     */
    public function __construct(startup $startup)
    {
        $this->startup = $startup;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.startup");
    }
}
