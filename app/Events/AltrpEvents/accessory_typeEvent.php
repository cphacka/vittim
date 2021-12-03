<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\accessory_type;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class accessory_typeEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $accessory_type;

    /**
     * Create a new event instance.
     *
     * @param accessory_type $accessory_type
     * @return void
     */
    public function __construct(accessory_type $accessory_type)
    {
        $this->accessory_type = $accessory_type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.accessory_type");
    }
}
