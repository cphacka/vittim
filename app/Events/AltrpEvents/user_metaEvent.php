<?php

namespace App\Events\AltrpEvents;

use App\UserMeta;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class user_metaEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_meta;

    /**
     * Create a new event instance.
     *
     * @param user_meta $user_meta
     * @return void
     */
    public function __construct(user_meta $user_meta)
    {
        $this->user_meta = $user_meta;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.user_meta");
    }
}
