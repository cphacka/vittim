<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\handler_history;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class handler_historyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $handler_history;

    /**
     * Create a new event instance.
     *
     * @param handler_history $handler_history
     * @return void
     */
    public function __construct(handler_history $handler_history)
    {
        $this->handler_history = $handler_history;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.handler_history");
    }
}
