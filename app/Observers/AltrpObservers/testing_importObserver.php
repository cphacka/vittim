<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\testing_importEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\testing_import;
use Illuminate\Foundation\Bus\DispatchesJobs;

class testing_importObserver extends BaseObserver
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
     * Handle the testing_import "created" event.
     *
     * @param  \App\AltrpModels\testing_import $testing_import
     * @return void
     */
    public function created(testing_import $testing_import)
    {
        $model = Model::where('name', 'testing_import')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $testing_import,
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
     * Handle the testing_import "updated" event.
     *
     * @param  \App\AltrpModels\testing_import $testing_import
     * @return void
     */
    public function updated(testing_import $testing_import)
    {
        $model = Model::where('name', 'testing_import')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $testing_import,
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
     * Handle the testing_import "deleted" event.
     *
     * @param  \App\AltrpModels\testing_import $testing_import
     * @return void
     */
    public function deleted(testing_import $testing_import)
    {
        $model = Model::where('name', 'testing_import')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $testing_import,
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
     * Handle the testing_import "restored" event.
     *
     * @param  \App\AltrpModels\testing_import $testing_import
     * @return void
     */
    public function restored(testing_import $testing_import)
    {
        //
    }

    /**
     * Handle the testing_import "force deleted" event.
     *
     * @param  \App\AltrpModels\testing_import $testing_import
     * @return void
     */
    public function forceDeleted(testing_import $testing_import)
    {
        //
    }
}