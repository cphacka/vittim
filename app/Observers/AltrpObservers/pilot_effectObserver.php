<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\pilot_effectEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\pilot_effect;
use Illuminate\Foundation\Bus\DispatchesJobs;

class pilot_effectObserver extends BaseObserver
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
     * Handle the pilot_effect "created" event.
     *
     * @param  \App\AltrpModels\pilot_effect $pilot_effect
     * @return void
     */
    public function created(pilot_effect $pilot_effect)
    {
        $model = Model::where('name', 'pilot_effect')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_effect,
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
     * Handle the pilot_effect "updated" event.
     *
     * @param  \App\AltrpModels\pilot_effect $pilot_effect
     * @return void
     */
    public function updated(pilot_effect $pilot_effect)
    {
        $model = Model::where('name', 'pilot_effect')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_effect,
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
     * Handle the pilot_effect "deleted" event.
     *
     * @param  \App\AltrpModels\pilot_effect $pilot_effect
     * @return void
     */
    public function deleted(pilot_effect $pilot_effect)
    {
        $model = Model::where('name', 'pilot_effect')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_effect,
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
     * Handle the pilot_effect "restored" event.
     *
     * @param  \App\AltrpModels\pilot_effect $pilot_effect
     * @return void
     */
    public function restored(pilot_effect $pilot_effect)
    {
        //
    }

    /**
     * Handle the pilot_effect "force deleted" event.
     *
     * @param  \App\AltrpModels\pilot_effect $pilot_effect
     * @return void
     */
    public function forceDeleted(pilot_effect $pilot_effect)
    {
        //
    }
}