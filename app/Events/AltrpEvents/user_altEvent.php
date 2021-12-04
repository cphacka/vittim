<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\user_alt;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class user_altEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_alt;

    /**
     * Create a new event instance.
     *
     * @param user_alt $user_alt
     * @return void
     */
    public function __construct(user_alt $user_alt)
    {
        $this->user_alt = $user_alt;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.user_alt");
    }
}
