<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\pilot_eventEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\pilot_event;
use Illuminate\Foundation\Bus\DispatchesJobs;

class pilot_eventObserver extends BaseObserver
{
    use DispatchesJobs;

    /**
     * @var RobotsService
     */
    protected $robotsService;

    /**
     * @var CurrentEnvironment|mixed
     */
    protected $currentEnvironment;

    /**
     * test_postObserver constructor.
     * @param RobotsService $robotsService
     */
    public function __construct(RobotsService $robotsService)
    {
        $this->robotsService = $robotsService;
        $this->currentEnvironment = CurrentEnvironment::getInstance();
    }

    /**
     * Handle the pilot_event "created" event.
     *
     * @param  \App\AltrpModels\pilot_event $pilot_event
     * @return void
     */
    public function created(pilot_event $pilot_event)
    {
        $model = Model::where('name', 'pilot_event')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_event,
            'action_type' => 'create'
        ];

        $robots = $this->robotsService->getCurrentModelRobots($model);

        $this->dispatch(new RunRobotsJob(
            $robots,
            $this->robotsService,
            $data,
            'created',
            $this->currentEnvironment
        ));
    }

    /**
     * Handle the pilot_event "updated" event.
     *
     * @param  \App\AltrpModels\pilot_event $pilot_event
     * @return void
     */
    public function updated(pilot_event $pilot_event)
    {
        $model = Model::where('name', 'pilot_event')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_event,
            'action_type' => 'update'
        ];

        $robots = $this->robotsService->getCurrentModelRobots($model);

        $this->dispatch(new RunRobotsJob(
            $robots,
            $this->robotsService,
            $data,
            'updated',
            $this->currentEnvironment
        ));
    }

    /**
     * Handle the pilot_event "deleted" event.
     *
     * @param  \App\AltrpModels\pilot_event $pilot_event
     * @return void
     */
    public function deleted(pilot_event $pilot_event)
    {
        $model = Model::where('name', 'pilot_event')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_event,
            'action_type' => 'delete'
        ];

        $robots = $this->robotsService->getCurrentModelRobots($model);

        $this->dispatch(new RunRobotsJob(
            $robots,
            $this->robotsService,
            $data,
            'deleted',
            $this->currentEnvironment
        ));
    }

    /**
     * Handle the pilot_event "restored" event.
     *
     * @param  \App\AltrpModels\pilot_event $pilot_event
     * @return void
     */
    public function restored(pilot_event $pilot_event)
    {
        //
    }

    /**
     * Handle the pilot_event "force deleted" event.
     *
     * @param  \App\AltrpModels\pilot_event $pilot_event
     * @return void
     */
    public function forceDeleted(pilot_event $pilot_event)
    {
        //
    }
}