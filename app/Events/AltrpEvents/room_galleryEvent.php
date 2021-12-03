<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\room_gallery;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class room_galleryEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $room_gallery;

    /**
     * Create a new event instance.
     *
     * @param room_gallery $room_gallery
     * @return void
     */
    public function __construct(room_gallery $room_gallery)
    {
        $this->room_gallery = $room_gallery;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.room_gallery");
    }
}
