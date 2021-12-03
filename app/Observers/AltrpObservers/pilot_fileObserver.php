<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\pilot_fileEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\pilot_file;
use Illuminate\Foundation\Bus\DispatchesJobs;

class pilot_fileObserver extends BaseObserver
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
     * Handle the pilot_file "created" event.
     *
     * @param  \App\AltrpModels\pilot_file $pilot_file
     * @return void
     */
    public function created(pilot_file $pilot_file)
    {
        $model = Model::where('name', 'pilot_file')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_file,
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
     * Handle the pilot_file "updated" event.
     *
     * @param  \App\AltrpModels\pilot_file $pilot_file
     * @return void
     */
    public function updated(pilot_file $pilot_file)
    {
        $model = Model::where('name', 'pilot_file')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_file,
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
     * Handle the pilot_file "deleted" event.
     *
     * @param  \App\AltrpModels\pilot_file $pilot_file
     * @return void
     */
    public function deleted(pilot_file $pilot_file)
    {
        $model = Model::where('name', 'pilot_file')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $pilot_file,
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
     * Handle the pilot_file "restored" event.
     *
     * @param  \App\AltrpModels\pilot_file $pilot_file
     * @return void
     */
    public function restored(pilot_file $pilot_file)
    {
        //
    }

    /**
     * Handle the pilot_file "force deleted" event.
     *
     * @param  \App\AltrpModels\pilot_file $pilot_file
     * @return void
     */
    public function forceDeleted(pilot_file $pilot_file)
    {
        //
    }
}