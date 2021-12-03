<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\test5;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class test5Event implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $test5;

    /**
     * Create a new event instance.
     *
     * @param test5 $test5
     * @return void
     */
    public function __construct(test5 $test5)
    {
        $this->test5 = $test5;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.test5");
    }
}
