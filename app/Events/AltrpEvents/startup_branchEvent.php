<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\startup_branch;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class startup_branchEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $startup_branch;

    /**
     * Create a new event instance.
     *
     * @param startup_branch $startup_branch
     * @return void
     */
    public function __construct(startup_branch $startup_branch)
    {
        $this->startup_branch = $startup_branch;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.startup_branch");
    }
}
