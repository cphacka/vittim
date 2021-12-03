<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\flow_typeEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\flow_type;
use Illuminate\Foundation\Bus\DispatchesJobs;

class flow_typeObserver extends BaseObserver
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
     * Handle the flow_type "created" event.
     *
     * @param  \App\AltrpModels\flow_type $flow_type
     * @return void
     */
    public function created(flow_type $flow_type)
    {
        $model = Model::where('name', 'flow_type')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $flow_type,
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
     * Handle the flow_type "updated" event.
     *
     * @param  \App\AltrpModels\flow_type $flow_type
     * @return void
     */
    public function updated(flow_type $flow_type)
    {
        $model = Model::where('name', 'flow_type')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $flow_type,
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
     * Handle the flow_type "deleted" event.
     *
     * @param  \App\AltrpModels\flow_type $flow_type
     * @return void
     */
    public function deleted(flow_type $flow_type)
    {
        $model = Model::where('name', 'flow_type')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $flow_type,
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
     * Handle the flow_type "restored" event.
     *
     * @param  \App\AltrpModels\flow_type $flow_type
     * @return void
     */
    public function restored(flow_type $flow_type)
    {
        //
    }

    /**
     * Handle the flow_type "force deleted" event.
     *
     * @param  \App\AltrpModels\flow_type $flow_type
     * @return void
     */
    public function forceDeleted(flow_type $flow_type)
    {
        //
    }
}