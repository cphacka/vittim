<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\test_3;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class test_3Event implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $test_3;

    /**
     * Create a new event instance.
     *
     * @param test_3 $test_3
     * @return void
     */
    public function __construct(test_3 $test_3)
    {
        $this->test_3 = $test_3;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.test_3");
    }
}
