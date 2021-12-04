<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\test_3Event;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\test_3;
use Illuminate\Foundation\Bus\DispatchesJobs;

class test_3Observer extends BaseObserver
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
     * Handle the test_3 "created" event.
     *
     * @param  \App\AltrpModels\test_3 $test_3
     * @return void
     */
    public function created(test_3 $test_3)
    {
        $model = Model::where('name', 'test_3')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $test_3,
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
     * Handle the test_3 "updated" event.
     *
     * @param  \App\AltrpModels\test_3 $test_3
     * @return void
     */
    public function updated(test_3 $test_3)
    {
        $model = Model::where('name', 'test_3')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $test_3,
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
     * Handle the test_3 "deleted" event.
     *
     * @param  \App\AltrpModels\test_3 $test_3
     * @return void
     */
    public function deleted(test_3 $test_3)
    {
        $model = Model::where('name', 'test_3')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $test_3,
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
     * Handle the test_3 "restored" event.
     *
     * @param  \App\AltrpModels\test_3 $test_3
     * @return void
     */
    public function restored(test_3 $test_3)
    {
        //
    }

    /**
     * Handle the test_3 "force deleted" event.
     *
     * @param  \App\AltrpModels\test_3 $test_3
     * @return void
     */
    public function forceDeleted(test_3 $test_3)
    {
        //
    }
}