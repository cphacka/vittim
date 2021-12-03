<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\tasks;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class tasksEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $tasks;

    /**
     * Create a new event instance.
     *
     * @param tasks $tasks
     * @return void
     */
    public function __construct(tasks $tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.tasks");
    }
}
