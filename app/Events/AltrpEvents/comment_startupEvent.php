<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\comment_startup;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class comment_startupEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $comment_startup;

    /**
     * Create a new event instance.
     *
     * @param comment_startup $comment_startup
     * @return void
     */
    public function __construct(comment_startup $comment_startup)
    {
        $this->comment_startup = $comment_startup;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.comment_startup");
    }
}
