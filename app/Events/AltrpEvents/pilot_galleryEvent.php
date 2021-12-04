<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_gallery;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_galleryEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_gallery;

    /**
     * Create a new event instance.
     *
     * @param pilot_gallery $pilot_gallery
     * @return void
     */
    public function __construct(pilot_gallery $pilot_gallery)
    {
        $this->pilot_gallery = $pilot_gallery;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_gallery");
    }
}
