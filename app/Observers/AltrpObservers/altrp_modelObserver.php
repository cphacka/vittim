<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\altrp_modelEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\altrp_model;
use Illuminate\Foundation\Bus\DispatchesJobs;

class altrp_modelObserver extends BaseObserver
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
     * Handle the altrp_model "created" event.
     *
     * @param  \App\AltrpModels\altrp_model $altrp_model
     * @return void
     */
    public function created(altrp_model $altrp_model)
    {
        $model = Model::where('name', 'altrp_model')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $altrp_model,
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
     * Handle the altrp_model "updated" event.
     *
     * @param  \App\AltrpModels\altrp_model $altrp_model
     * @return void
     */
    public function updated(altrp_model $altrp_model)
    {
        $model = Model::where('name', 'altrp_model')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $altrp_model,
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
     * Handle the altrp_model "deleted" event.
     *
     * @param  \App\AltrpModels\altrp_model $altrp_model
     * @return void
     */
    public function deleted(altrp_model $altrp_model)
    {
        $model = Model::where('name', 'altrp_model')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $altrp_model,
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
     * Handle the altrp_model "restored" event.
     *
     * @param  \App\AltrpModels\altrp_model $altrp_model
     * @return void
     */
    public function restored(altrp_model $altrp_model)
    {
        //
    }

    /**
     * Handle the altrp_model "force deleted" event.
     *
     * @param  \App\AltrpModels\altrp_model $altrp_model
     * @return void
     */
    public function forceDeleted(altrp_model $altrp_model)
    {
        //
    }
}