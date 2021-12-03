<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\handler;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class handlerEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $handler;

    /**
     * Create a new event instance.
     *
     * @param handler $handler
     * @return void
     */
    public function __construct(handler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.handler");
    }
}
