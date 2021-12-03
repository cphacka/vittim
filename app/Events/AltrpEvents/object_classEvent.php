<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\object_class;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class object_classEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $object_class;

    /**
     * Create a new event instance.
     *
     * @param object_class $object_class
     * @return void
     */
    public function __construct(object_class $object_class)
    {
        $this->object_class = $object_class;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.object_class");
    }
}
