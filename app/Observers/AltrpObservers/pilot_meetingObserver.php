<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\pilot_meetingEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\pilot_meeting;
use Illuminate\Foundation\Bus\DispatchesJobs;

class pilot_meetingObserver extends BaseObserver
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
     * Handle the pilot_meeting "created" event.
     *
     * @param  \App\AltrpModels\pilot_meeting $pilot_meeting
     * @return void
     */
    public function created(pilot_meeting $pilot_meeting)
    {
        $model = Model::where('name', 'pilot_meeting')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_meeting,
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
     * Handle the pilot_meeting "updated" event.
     *
     * @param  \App\AltrpModels\pilot_meeting $pilot_meeting
     * @return void
     */
    public function updated(pilot_meeting $pilot_meeting)
    {
        $model = Model::where('name', 'pilot_meeting')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_meeting,
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
     * Handle the pilot_meeting "deleted" event.
     *
     * @param  \App\AltrpModels\pilot_meeting $pilot_meeting
     * @return void
     */
    public function deleted(pilot_meeting $pilot_meeting)
    {
        $model = Model::where('name', 'pilot_meeting')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_meeting,
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
     * Handle the pilot_meeting "restored" event.
     *
     * @param  \App\AltrpModels\pilot_meeting $pilot_meeting
     * @return void
     */
    public function restored(pilot_meeting $pilot_meeting)
    {
        //
    }

    /**
     * Handle the pilot_meeting "force deleted" event.
     *
     * @param  \App\AltrpModels\pilot_meeting $pilot_meeting
     * @return void
     */
    public function forceDeleted(pilot_meeting $pilot_meeting)
    {
        //
    }
}