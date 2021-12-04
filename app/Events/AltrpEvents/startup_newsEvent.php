<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\startup_news;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class startup_newsEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $startup_news;

    /**
     * Create a new event instance.
     *
     * @param startup_news $startup_news
     * @return void
     */
    public function __construct(startup_news $startup_news)
    {
        $this->startup_news = $startup_news;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.startup_news");
    }
}
