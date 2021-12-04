<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\flow;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class flowEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $flow;

    /**
     * Create a new event instance.
     *
     * @param flow $flow
     * @return void
     */
    public function __construct(flow $flow)
    {
        $this->flow = $flow;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.flow");
    }
}
