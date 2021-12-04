<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\technology;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class technologyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $technology;

    /**
     * Create a new event instance.
     *
     * @param technology $technology
     * @return void
     */
    public function __construct(technology $technology)
    {
        $this->technology = $technology;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.technology");
    }
}
