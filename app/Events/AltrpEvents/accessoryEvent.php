<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\accessory;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class accessoryEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $accessory;

    /**
     * Create a new event instance.
     *
     * @param accessory $accessory
     * @return void
     */
    public function __construct(accessory $accessory)
    {
        $this->accessory = $accessory;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.accessory");
    }
}
