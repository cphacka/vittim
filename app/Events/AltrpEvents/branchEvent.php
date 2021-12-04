<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\branch;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class branchEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $branch;

    /**
     * Create a new event instance.
     *
     * @param branch $branch
     * @return void
     */
    public function __construct(branch $branch)
    {
        $this->branch = $branch;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.branch");
    }
}
