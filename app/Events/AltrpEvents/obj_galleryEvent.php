<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\obj_gallery;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class obj_galleryEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $obj_gallery;

    /**
     * Create a new event instance.
     *
     * @param obj_gallery $obj_gallery
     * @return void
     */
    public function __construct(obj_gallery $obj_gallery)
    {
        $this->obj_gallery = $obj_gallery;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.obj_gallery");
    }
}
