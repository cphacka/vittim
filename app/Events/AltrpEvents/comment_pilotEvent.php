<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\comment_pilot;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class comment_pilotEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $comment_pilot;

    /**
     * Create a new event instance.
     *
     * @param comment_pilot $comment_pilot
     * @return void
     */
    public function __construct(comment_pilot $comment_pilot)
    {
        $this->comment_pilot = $comment_pilot;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.comment_pilot");
    }
}
