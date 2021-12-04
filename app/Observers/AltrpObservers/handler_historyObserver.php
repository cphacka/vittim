<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\handler_historyEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\handler_history;
use Illuminate\Foundation\Bus\DispatchesJobs;

class handler_historyObserver extends BaseObserver
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
     * Handle the handler_history "created" event.
     *
     * @param  \App\AltrpModels\handler_history $handler_history
     * @return void
     */
    public function created(handler_history $handler_history)
    {
        $model = Model::where('name', 'handler_history')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $handler_history,
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
     * Handle the handler_history "updated" event.
     *
     * @param  \App\AltrpModels\handler_history $handler_history
     * @return void
     */
    public function updated(handler_history $handler_history)
    {
        $model = Model::where('name', 'handler_history')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $handler_history,
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
     * Handle the handler_history "deleted" event.
     *
     * @param  \App\AltrpModels\handler_history $handler_history
     * @return void
     */
    public function deleted(handler_history $handler_history)
    {
        $model = Model::where('name', 'handler_history')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $handler_history,
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
     * Handle the handler_history "restored" event.
     *
     * @param  \App\AltrpModels\handler_history $handler_history
     * @return void
     */
    public function restored(handler_history $handler_history)
    {
        //
    }

    /**
     * Handle the handler_history "force deleted" event.
     *
     * @param  \App\AltrpModels\handler_history $handler_history
     * @return void
     */
    public function forceDeleted(handler_history $handler_history)
    {
        //
    }
}