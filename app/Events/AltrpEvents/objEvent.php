<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\obj;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class objEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $obj;

    /**
     * Create a new event instance.
     *
     * @param obj $obj
     * @return void
     */
    public function __construct(obj $obj)
    {
        $this->obj = $obj;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.obj");
    }
}
