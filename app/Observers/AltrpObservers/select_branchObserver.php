<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\select_branchEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\select_branch;
use Illuminate\Foundation\Bus\DispatchesJobs;

class select_branchObserver extends BaseObserver
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
     * Handle the select_branch "created" event.
     *
     * @param  \App\AltrpModels\select_branch $select_branch
     * @return void
     */
    public function created(select_branch $select_branch)
    {
        $model = Model::where('name', 'select_branch')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $select_branch,
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
     * Handle the select_branch "updated" event.
     *
     * @param  \App\AltrpModels\select_branch $select_branch
     * @return void
     */
    public function updated(select_branch $select_branch)
    {
        $model = Model::where('name', 'select_branch')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $select_branch,
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
     * Handle the select_branch "deleted" event.
     *
     * @param  \App\AltrpModels\select_branch $select_branch
     * @return void
     */
    public function deleted(select_branch $select_branch)
    {
        $model = Model::where('name', 'select_branch')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $select_branch,
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
     * Handle the select_branch "restored" event.
     *
     * @param  \App\AltrpModels\select_branch $select_branch
     * @return void
     */
    public function restored(select_branch $select_branch)
    {
        //
    }

    /**
     * Handle the select_branch "force deleted" event.
     *
     * @param  \App\AltrpModels\select_branch $select_branch
     * @return void
     */
    public function forceDeleted(select_branch $select_branch)
    {
        //
    }
}