<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\comment_pilotEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\comment_pilot;
use Illuminate\Foundation\Bus\DispatchesJobs;

class comment_pilotObserver extends BaseObserver
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
     * Handle the comment_pilot "created" event.
     *
     * @param  \App\AltrpModels\comment_pilot $comment_pilot
     * @return void
     */
    public function created(comment_pilot $comment_pilot)
    {
        $model = Model::where('name', 'comment_pilot')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $comment_pilot,
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
     * Handle the comment_pilot "updated" event.
     *
     * @param  \App\AltrpModels\comment_pilot $comment_pilot
     * @return void
     */
    public function updated(comment_pilot $comment_pilot)
    {
        $model = Model::where('name', 'comment_pilot')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $comment_pilot,
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
     * Handle the comment_pilot "deleted" event.
     *
     * @param  \App\AltrpModels\comment_pilot $comment_pilot
     * @return void
     */
    public function deleted(comment_pilot $comment_pilot)
    {
        $model = Model::where('name', 'comment_pilot')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $comment_pilot,
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
     * Handle the comment_pilot "restored" event.
     *
     * @param  \App\AltrpModels\comment_pilot $comment_pilot
     * @return void
     */
    public function restored(comment_pilot $comment_pilot)
    {
        //
    }

    /**
     * Handle the comment_pilot "force deleted" event.
     *
     * @param  \App\AltrpModels\comment_pilot $comment_pilot
     * @return void
     */
    public function forceDeleted(comment_pilot $comment_pilot)
    {
        //
    }
}