<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\favorite;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class favoriteEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $favorite;

    /**
     * Create a new event instance.
     *
     * @param favorite $favorite
     * @return void
     */
    public function __construct(favorite $favorite)
    {
        $this->favorite = $favorite;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.favorite");
    }
}
