<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\testing_import;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class testing_importEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $testing_import;

    /**
     * Create a new event instance.
     *
     * @param testing_import $testing_import
     * @return void
     */
    public function __construct(testing_import $testing_import)
    {
        $this->testing_import = $testing_import;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.testing_import");
    }
}
