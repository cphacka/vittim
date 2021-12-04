<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\count_person;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class count_personEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $count_person;

    /**
     * Create a new event instance.
     *
     * @param count_person $count_person
     * @return void
     */
    public function __construct(count_person $count_person)
    {
        $this->count_person = $count_person;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.count_person");
    }
}
