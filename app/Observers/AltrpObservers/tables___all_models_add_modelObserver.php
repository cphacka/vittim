<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\tables___all_models_add_modelEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\tables___all_models_add_model;
use Illuminate\Foundation\Bus\DispatchesJobs;

class tables___all_models_add_modelObserver extends BaseObserver
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
     * Handle the tables___all_models_add_model "created" event.
     *
     * @param  \App\AltrpModels\tables___all_models_add_model $tables___all_models_add_model
     * @return void
     */
    public function created(tables___all_models_add_model $tables___all_models_add_model)
    {
        $model = Model::where('name', 'tables___all_models_add_model')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $tables___all_models_add_model,
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
     * Handle the tables___all_models_add_model "updated" event.
     *
     * @param  \App\AltrpModels\tables___all_models_add_model $tables___all_models_add_model
     * @return void
     */
    public function updated(tables___all_models_add_model $tables___all_models_add_model)
    {
        $model = Model::where('name', 'tables___all_models_add_model')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $tables___all_models_add_model,
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
     * Handle the tables___all_models_add_model "deleted" event.
     *
     * @param  \App\AltrpModels\tables___all_models_add_model $tables___all_models_add_model
     * @return void
     */
    public function deleted(tables___all_models_add_model $tables___all_models_add_model)
    {
        $model = Model::where('name', 'tables___all_models_add_model')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $tables___all_models_add_model,
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
     * Handle the tables___all_models_add_model "restored" event.
     *
     * @param  \App\AltrpModels\tables___all_models_add_model $tables___all_models_add_model
     * @return void
     */
    public function restored(tables___all_models_add_model $tables___all_models_add_model)
    {
        //
    }

    /**
     * Handle the tables___all_models_add_model "force deleted" event.
     *
     * @param  \App\AltrpModels\tables___all_models_add_model $tables___all_models_add_model
     * @return void
     */
    public function forceDeleted(tables___all_models_add_model $tables___all_models_add_model)
    {
        //
    }
}