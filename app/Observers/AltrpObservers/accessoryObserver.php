<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\accessoryEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\accessory;
use Illuminate\Foundation\Bus\DispatchesJobs;

class accessoryObserver extends BaseObserver
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
     * Handle the accessory "created" event.
     *
     * @param  \App\AltrpModels\accessory $accessory
     * @return void
     */
    public function created(accessory $accessory)
    {
        $model = Model::where('name', 'accessory')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $accessory,
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
     * Handle the accessory "updated" event.
     *
     * @param  \App\AltrpModels\accessory $accessory
     * @return void
     */
    public function updated(accessory $accessory)
    {
        $model = Model::where('name', 'accessory')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $accessory,
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
     * Handle the accessory "deleted" event.
     *
     * @param  \App\AltrpModels\accessory $accessory
     * @return void
     */
    public function deleted(accessory $accessory)
    {
        $model = Model::where('name', 'accessory')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $accessory,
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
     * Handle the accessory "restored" event.
     *
     * @param  \App\AltrpModels\accessory $accessory
     * @return void
     */
    public function restored(accessory $accessory)
    {
        //
    }

    /**
     * Handle the accessory "force deleted" event.
     *
     * @param  \App\AltrpModels\accessory $accessory
     * @return void
     */
    public function forceDeleted(accessory $accessory)
    {
        //
    }
}