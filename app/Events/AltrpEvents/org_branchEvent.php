<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\org_branch;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class org_branchEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $org_branch;

    /**
     * Create a new event instance.
     *
     * @param org_branch $org_branch
     * @return void
     */
    public function __construct(org_branch $org_branch)
    {
        $this->org_branch = $org_branch;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.org_branch");
    }
}
