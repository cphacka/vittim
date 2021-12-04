<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\altrp_model;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class altrp_modelEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $altrp_model;

    /**
     * Create a new event instance.
     *
     * @param altrp_model $altrp_model
     * @return void
     */
    public function __construct(altrp_model $altrp_model)
    {
        $this->altrp_model = $altrp_model;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.altrp_model");
    }
}
