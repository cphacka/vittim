<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\shed;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class shedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $shed;

    /**
     * Create a new event instance.
     *
     * @param shed $shed
     * @return void
     */
    public function __construct(shed $shed)
    {
        $this->shed = $shed;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.shed");
    }
}
