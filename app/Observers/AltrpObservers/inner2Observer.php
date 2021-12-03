<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\inner2Event;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\inner2;
use Illuminate\Foundation\Bus\DispatchesJobs;

class inner2Observer extends BaseObserver
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
     * Handle the inner2 "created" event.
     *
     * @param  \App\AltrpModels\inner2 $inner2
     * @return void
     */
    public function created(inner2 $inner2)
    {
        $model = Model::where('name', 'inner2')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $inner2,
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
     * Handle the inner2 "updated" event.
     *
     * @param  \App\AltrpModels\inner2 $inner2
     * @return void
     */
    public function updated(inner2 $inner2)
    {
        $model = Model::where('name', 'inner2')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $inner2,
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
     * Handle the inner2 "deleted" event.
     *
     * @param  \App\AltrpModels\inner2 $inner2
     * @return void
     */
    public function deleted(inner2 $inner2)
    {
        $model = Model::where('name', 'inner2')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $inner2,
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
     * Handle the inner2 "restored" event.
     *
     * @param  \App\AltrpModels\inner2 $inner2
     * @return void
     */
    public function restored(inner2 $inner2)
    {
        //
    }

    /**
     * Handle the inner2 "force deleted" event.
     *
     * @param  \App\AltrpModels\inner2 $inner2
     * @return void
     */
    public function forceDeleted(inner2 $inner2)
    {
        //
    }
}