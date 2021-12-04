<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\startup_newsEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\startup_news;
use Illuminate\Foundation\Bus\DispatchesJobs;

class startup_newsObserver extends BaseObserver
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
     * Handle the startup_news "created" event.
     *
     * @param  \App\AltrpModels\startup_news $startup_news
     * @return void
     */
    public function created(startup_news $startup_news)
    {
        $model = Model::where('name', 'startup_news')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_news,
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
     * Handle the startup_news "updated" event.
     *
     * @param  \App\AltrpModels\startup_news $startup_news
     * @return void
     */
    public function updated(startup_news $startup_news)
    {
        $model = Model::where('name', 'startup_news')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_news,
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
     * Handle the startup_news "deleted" event.
     *
     * @param  \App\AltrpModels\startup_news $startup_news
     * @return void
     */
    public function deleted(startup_news $startup_news)
    {
        $model = Model::where('name', 'startup_news')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $startup_news,
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
     * Handle the startup_news "restored" event.
     *
     * @param  \App\AltrpModels\startup_news $startup_news
     * @return void
     */
    public function restored(startup_news $startup_news)
    {
        //
    }

    /**
     * Handle the startup_news "force deleted" event.
     *
     * @param  \App\AltrpModels\startup_news $startup_news
     * @return void
     */
    public function forceDeleted(startup_news $startup_news)
    {
        //
    }
}