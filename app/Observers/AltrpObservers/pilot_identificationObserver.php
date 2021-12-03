<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\pilot_identificationEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\pilot_identification;
use Illuminate\Foundation\Bus\DispatchesJobs;

class pilot_identificationObserver extends BaseObserver
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
     * Handle the pilot_identification "created" event.
     *
     * @param  \App\AltrpModels\pilot_identification $pilot_identification
     * @return void
     */
    public function created(pilot_identification $pilot_identification)
    {
        $model = Model::where('name', 'pilot_identification')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_identification,
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
     * Handle the pilot_identification "updated" event.
     *
     * @param  \App\AltrpModels\pilot_identification $pilot_identification
     * @return void
     */
    public function updated(pilot_identification $pilot_identification)
    {
        $model = Model::where('name', 'pilot_identification')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_identification,
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
     * Handle the pilot_identification "deleted" event.
     *
     * @param  \App\AltrpModels\pilot_identification $pilot_identification
     * @return void
     */
    public function deleted(pilot_identification $pilot_identification)
    {
        $model = Model::where('name', 'pilot_identification')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_identification,
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
     * Handle the pilot_identification "restored" event.
     *
     * @param  \App\AltrpModels\pilot_identification $pilot_identification
     * @return void
     */
    public function restored(pilot_identification $pilot_identification)
    {
        //
    }

    /**
     * Handle the pilot_identification "force deleted" event.
     *
     * @param  \App\AltrpModels\pilot_identification $pilot_identification
     * @return void
     */
    public function forceDeleted(pilot_identification $pilot_identification)
    {
        //
    }
}