<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\startup_technologyEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\startup_technology;
use Illuminate\Foundation\Bus\DispatchesJobs;

class startup_technologyObserver extends BaseObserver
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
     * Handle the startup_technology "created" event.
     *
     * @param  \App\AltrpModels\startup_technology $startup_technology
     * @return void
     */
    public function created(startup_technology $startup_technology)
    {
        $model = Model::where('name', 'startup_technology')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_technology,
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
     * Handle the startup_technology "updated" event.
     *
     * @param  \App\AltrpModels\startup_technology $startup_technology
     * @return void
     */
    public function updated(startup_technology $startup_technology)
    {
        $model = Model::where('name', 'startup_technology')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_technology,
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
     * Handle the startup_technology "deleted" event.
     *
     * @param  \App\AltrpModels\startup_technology $startup_technology
     * @return void
     */
    public function deleted(startup_technology $startup_technology)
    {
        $model = Model::where('name', 'startup_technology')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_technology,
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
     * Handle the startup_technology "restored" event.
     *
     * @param  \App\AltrpModels\startup_technology $startup_technology
     * @return void
     */
    public function restored(startup_technology $startup_technology)
    {
        //
    }

    /**
     * Handle the startup_technology "force deleted" event.
     *
     * @param  \App\AltrpModels\startup_technology $startup_technology
     * @return void
     */
    public function forceDeleted(startup_technology $startup_technology)
    {
        //
    }
}