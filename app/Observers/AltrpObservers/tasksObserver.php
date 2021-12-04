<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\tasksEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\tasks;
use Illuminate\Foundation\Bus\DispatchesJobs;

class tasksObserver extends BaseObserver
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
     * Handle the tasks "created" event.
     *
     * @param  \App\AltrpModels\tasks $tasks
     * @return void
     */
    public function created(tasks $tasks)
    {
        $model = Model::where('name', 'tasks')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $tasks,
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
     * Handle the tasks "updated" event.
     *
     * @param  \App\AltrpModels\tasks $tasks
     * @return void
     */
    public function updated(tasks $tasks)
    {
        $model = Model::where('name', 'tasks')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $tasks,
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
     * Handle the tasks "deleted" event.
     *
     * @param  \App\AltrpModels\tasks $tasks
     * @return void
     */
    public function deleted(tasks $tasks)
    {
        $model = Model::where('name', 'tasks')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $tasks,
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
     * Handle the tasks "restored" event.
     *
     * @param  \App\AltrpModels\tasks $tasks
     * @return void
     */
    public function restored(tasks $tasks)
    {
        //
    }

    /**
     * Handle the tasks "force deleted" event.
     *
     * @param  \App\AltrpModels\tasks $tasks
     * @return void
     */
    public function forceDeleted(tasks $tasks)
    {
        //
    }
}