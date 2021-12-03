<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\org_team;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class org_teamEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $org_team;

    /**
     * Create a new event instance.
     *
     * @param org_team $org_team
     * @return void
     */
    public function __construct(org_team $org_team)
    {
        $this->org_team = $org_team;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.org_team");
    }
}
