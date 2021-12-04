<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\comment_startup_news;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class comment_startup_newsEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $comment_startup_news;

    /**
     * Create a new event instance.
     *
     * @param comment_startup_news $comment_startup_news
     * @return void
     */
    public function __construct(comment_startup_news $comment_startup_news)
    {
        $this->comment_startup_news = $comment_startup_news;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.comment_startup_news");
    }
}
