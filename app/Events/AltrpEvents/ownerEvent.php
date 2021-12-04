<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\owner;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ownerEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $owner;

    /**
     * Create a new event instance.
     *
     * @param owner $owner
     * @return void
     */
    public function __construct(owner $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.owner");
    }
}
