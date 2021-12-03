<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\media_alt;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class media_altEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $media_alt;

    /**
     * Create a new event instance.
     *
     * @param media_alt $media_alt
     * @return void
     */
    public function __construct(media_alt $media_alt)
    {
        $this->media_alt = $media_alt;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.media_alt");
    }
}
