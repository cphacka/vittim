<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\zayavka;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class zayavkaEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $zayavka;

    /**
     * Create a new event instance.
     *
     * @param zayavka $zayavka
     * @return void
     */
    public function __construct(zayavka $zayavka)
    {
        $this->zayavka = $zayavka;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.zayavka");
    }
}
