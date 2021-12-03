<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\startup_branchEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\startup_branch;
use Illuminate\Foundation\Bus\DispatchesJobs;

class startup_branchObserver extends BaseObserver
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
     * Handle the startup_branch "created" event.
     *
     * @param  \App\AltrpModels\startup_branch $startup_branch
     * @return void
     */
    public function created(startup_branch $startup_branch)
    {
        $model = Model::where('name', 'startup_branch')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_branch,
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
     * Handle the startup_branch "updated" event.
     *
     * @param  \App\AltrpModels\startup_branch $startup_branch
     * @return void
     */
    public function updated(startup_branch $startup_branch)
    {
        $model = Model::where('name', 'startup_branch')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_branch,
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
     * Handle the startup_branch "deleted" event.
     *
     * @param  \App\AltrpModels\startup_branch $startup_branch
     * @return void
     */
    public function deleted(startup_branch $startup_branch)
    {
        $model = Model::where('name', 'startup_branch')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_branch,
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
     * Handle the startup_branch "restored" event.
     *
     * @param  \App\AltrpModels\startup_branch $startup_branch
     * @return void
     */
    public function restored(startup_branch $startup_branch)
    {
        //
    }

    /**
     * Handle the startup_branch "force deleted" event.
     *
     * @param  \App\AltrpModels\startup_branch $startup_branch
     * @return void
     */
    public function forceDeleted(startup_branch $startup_branch)
    {
        //
    }
}