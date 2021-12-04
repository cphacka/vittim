<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\accessories;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class accessoriesEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $accessories;

    /**
     * Create a new event instance.
     *
     * @param accessories $accessories
     * @return void
     */
    public function __construct(accessories $accessories)
    {
        $this->accessories = $accessories;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.accessories");
    }
}
