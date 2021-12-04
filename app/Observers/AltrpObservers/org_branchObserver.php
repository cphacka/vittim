<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\org_branchEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\org_branch;
use Illuminate\Foundation\Bus\DispatchesJobs;

class org_branchObserver extends BaseObserver
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
     * Handle the org_branch "created" event.
     *
     * @param  \App\AltrpModels\org_branch $org_branch
     * @return void
     */
    public function created(org_branch $org_branch)
    {
        $model = Model::where('name', 'org_branch')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $org_branch,
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
     * Handle the org_branch "updated" event.
     *
     * @param  \App\AltrpModels\org_branch $org_branch
     * @return void
     */
    public function updated(org_branch $org_branch)
    {
        $model = Model::where('name', 'org_branch')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $org_branch,
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
     * Handle the org_branch "deleted" event.
     *
     * @param  \App\AltrpModels\org_branch $org_branch
     * @return void
     */
    public function deleted(org_branch $org_branch)
    {
        $model = Model::where('name', 'org_branch')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $org_branch,
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
     * Handle the org_branch "restored" event.
     *
     * @param  \App\AltrpModels\org_branch $org_branch
     * @return void
     */
    public function restored(org_branch $org_branch)
    {
        //
    }

    /**
     * Handle the org_branch "force deleted" event.
     *
     * @param  \App\AltrpModels\org_branch $org_branch
     * @return void
     */
    public function forceDeleted(org_branch $org_branch)
    {
        //
    }
}