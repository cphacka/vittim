<?php

namespace App\Events\AltrpEvents;

use App\RoleUser;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class role_userEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $role_user;

    /**
     * Create a new event instance.
     *
     * @param role_user $role_user
     * @return void
     */
    public function __construct(role_user $role_user)
    {
        $this->role_user = $role_user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.role_user");
    }
}
