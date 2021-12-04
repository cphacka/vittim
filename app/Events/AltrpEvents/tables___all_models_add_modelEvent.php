<?php

namespace App\Events\AltrpEvents;

use App\AltrpModels\tables___all_models_add_model;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class tables___all_models_add_modelEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $tables___all_models_add_model;

    /**
     * Create a new event instance.
     *
     * @param tables___all_models_add_model $tables___all_models_add_model
     * @return void
     */
    public function __construct(tables___all_models_add_model $tables___all_models_add_model)
    {
        $this->tables___all_models_add_model = $tables___all_models_add_model;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel("altrpchannel.tables___all_models_add_model");
    }
}
