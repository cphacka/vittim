<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\flow_type;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class flow_typeEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $flow_type;

    /**
     * Create a new event instance.
     *
     * @param flow_type $flow_type
     * @return void
     */
    public function __construct(flow_type $flow_type)
    {
        $this->flow_type = $flow_type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.flow_type");
    }
}
