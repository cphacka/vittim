<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\object_classEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\object_class;
use Illuminate\Foundation\Bus\DispatchesJobs;

class object_classObserver extends BaseObserver
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
     * Handle the object_class "created" event.
     *
     * @param  \App\AltrpModels\object_class $object_class
     * @return void
     */
    public function created(object_class $object_class)
    {
        $model = Model::where('name', 'object_class')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $object_class,
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
     * Handle the object_class "updated" event.
     *
     * @param  \App\AltrpModels\object_class $object_class
     * @return void
     */
    public function updated(object_class $object_class)
    {
        $model = Model::where('name', 'object_class')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $object_class,
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
     * Handle the object_class "deleted" event.
     *
     * @param  \App\AltrpModels\object_class $object_class
     * @return void
     */
    public function deleted(object_class $object_class)
    {
        $model = Model::where('name', 'object_class')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $object_class,
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
     * Handle the object_class "restored" event.
     *
     * @param  \App\AltrpModels\object_class $object_class
     * @return void
     */
    public function restored(object_class $object_class)
    {
        //
    }

    /**
     * Handle the object_class "force deleted" event.
     *
     * @param  \App\AltrpModels\object_class $object_class
     * @return void
     */
    public function forceDeleted(object_class $object_class)
    {
        //
    }
}