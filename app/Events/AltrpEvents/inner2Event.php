<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\inner2;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class inner2Event implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $inner2;

    /**
     * Create a new event instance.
     *
     * @param inner2 $inner2
     * @return void
     */
    public function __construct(inner2 $inner2)
    {
        $this->inner2 = $inner2;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.inner2");
    }
}
