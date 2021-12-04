<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\pilot_file;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class pilot_fileEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pilot_file;

    /**
     * Create a new event instance.
     *
     * @param pilot_file $pilot_file
     * @return void
     */
    public function __construct(pilot_file $pilot_file)
    {
        $this->pilot_file = $pilot_file;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.pilot_file");
    }
}
