<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\test4;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class test4Event implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $test4;

    /**
     * Create a new event instance.
     *
     * @param test4 $test4
     * @return void
     */
    public function __construct(test4 $test4)
    {
        $this->test4 = $test4;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.test4");
    }
}
