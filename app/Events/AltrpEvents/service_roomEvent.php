<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\service_room;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class service_roomEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $service_room;

    /**
     * Create a new event instance.
     *
     * @param service_room $service_room
     * @return void
     */
    public function __construct(service_room $service_room)
    {
        $this->service_room = $service_room;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.service_room");
    }
}
