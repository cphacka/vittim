<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\accessoriesEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\accessories;
use Illuminate\Foundation\Bus\DispatchesJobs;

class accessoriesObserver extends BaseObserver
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
     * Handle the accessories "created" event.
     *
     * @param  \App\AltrpModels\accessories $accessories
     * @return void
     */
    public function created(accessories $accessories)
    {
        $model = Model::where('name', 'accessories')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $accessories,
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
     * Handle the accessories "updated" event.
     *
     * @param  \App\AltrpModels\accessories $accessories
     * @return void
     */
    public function updated(accessories $accessories)
    {
        $model = Model::where('name', 'accessories')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $accessories,
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
     * Handle the accessories "deleted" event.
     *
     * @param  \App\AltrpModels\accessories $accessories
     * @return void
     */
    public function deleted(accessories $accessories)
    {
        $model = Model::where('name', 'accessories')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $accessories,
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
     * Handle the accessories "restored" event.
     *
     * @param  \App\AltrpModels\accessories $accessories
     * @return void
     */
    public function restored(accessories $accessories)
    {
        //
    }

    /**
     * Handle the accessories "force deleted" event.
     *
     * @param  \App\AltrpModels\accessories $accessories
     * @return void
     */
    public function forceDeleted(accessories $accessories)
    {
        //
    }
}