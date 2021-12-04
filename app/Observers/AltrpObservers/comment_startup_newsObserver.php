<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\comment_startup_newsEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\comment_startup_news;
use Illuminate\Foundation\Bus\DispatchesJobs;

class comment_startup_newsObserver extends BaseObserver
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
     * Handle the comment_startup_news "created" event.
     *
     * @param  \App\AltrpModels\comment_startup_news $comment_startup_news
     * @return void
     */
    public function created(comment_startup_news $comment_startup_news)
    {
        $model = Model::where('name', 'comment_startup_news')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $comment_startup_news,
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
     * Handle the comment_startup_news "updated" event.
     *
     * @param  \App\AltrpModels\comment_startup_news $comment_startup_news
     * @return void
     */
    public function updated(comment_startup_news $comment_startup_news)
    {
        $model = Model::where('name', 'comment_startup_news')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $comment_startup_news,
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
     * Handle the comment_startup_news "deleted" event.
     *
     * @param  \App\AltrpModels\comment_startup_news $comment_startup_news
     * @return void
     */
    public function deleted(comment_startup_news $comment_startup_news)
    {
        $model = Model::where('name', 'comment_startup_news')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $comment_startup_news,
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
     * Handle the comment_startup_news "restored" event.
     *
     * @param  \App\AltrpModels\comment_startup_news $comment_startup_news
     * @return void
     */
    public function restored(comment_startup_news $comment_startup_news)
    {
        //
    }

    /**
     * Handle the comment_startup_news "force deleted" event.
     *
     * @param  \App\AltrpModels\comment_startup_news $comment_startup_news
     * @return void
     */
    public function forceDeleted(comment_startup_news $comment_startup_news)
    {
        //
    }
}