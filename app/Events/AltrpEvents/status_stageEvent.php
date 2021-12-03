<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\status_stage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class status_stageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $status_stage;

    /**
     * Create a new event instance.
     *
     * @param status_stage $status_stage
     * @return void
     */
    public function __construct(status_stage $status_stage)
    {
        $this->status_stage = $status_stage;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.status_stage");
    }
}
