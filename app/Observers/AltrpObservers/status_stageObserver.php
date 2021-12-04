<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\status_stageEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\status_stage;
use Illuminate\Foundation\Bus\DispatchesJobs;

class status_stageObserver extends BaseObserver
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
     * Handle the status_stage "created" event.
     *
     * @param  \App\AltrpModels\status_stage $status_stage
     * @return void
     */
    public function created(status_stage $status_stage)
    {
        $model = Model::where('name', 'status_stage')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $status_stage,
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
     * Handle the status_stage "updated" event.
     *
     * @param  \App\AltrpModels\status_stage $status_stage
     * @return void
     */
    public function updated(status_stage $status_stage)
    {
        $model = Model::where('name', 'status_stage')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $status_stage,
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
     * Handle the status_stage "deleted" event.
     *
     * @param  \App\AltrpModels\status_stage $status_stage
     * @return void
     */
    public function deleted(status_stage $status_stage)
    {
        $model = Model::where('name', 'status_stage')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $status_stage,
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
     * Handle the status_stage "restored" event.
     *
     * @param  \App\AltrpModels\status_stage $status_stage
     * @return void
     */
    public function restored(status_stage $status_stage)
    {
        //
    }

    /**
     * Handle the status_stage "force deleted" event.
     *
     * @param  \App\AltrpModels\status_stage $status_stage
     * @return void
     */
    public function forceDeleted(status_stage $status_stage)
    {
        //
    }
}