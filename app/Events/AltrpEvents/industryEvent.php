<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\industry;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class industryEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $industry;

    /**
     * Create a new event instance.
     *
     * @param industry $industry
     * @return void
     */
    public function __construct(industry $industry)
    {
        $this->industry = $industry;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.industry");
    }
}
