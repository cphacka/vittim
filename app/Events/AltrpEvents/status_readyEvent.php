<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\status_ready;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class status_readyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $status_ready;

    /**
     * Create a new event instance.
     *
     * @param status_ready $status_ready
     * @return void
     */
    public function __construct(status_ready $status_ready)
    {
        $this->status_ready = $status_ready;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.status_ready");
    }
}
