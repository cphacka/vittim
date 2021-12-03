<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\user_metaEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\UserMeta;
use Illuminate\Foundation\Bus\DispatchesJobs;

class user_metaObserver extends BaseObserver
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
     * Handle the user_meta "created" event.
     *
     * @param  \App\UserMeta $user_meta
     * @return void
     */
    public function created(user_meta $user_meta)
    {
        $model = Model::where('name', 'user_meta')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $user_meta,
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
     * Handle the user_meta "updated" event.
     *
     * @param  \App\UserMeta $user_meta
     * @return void
     */
    public function updated(user_meta $user_meta)
    {
        $model = Model::where('name', 'user_meta')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $user_meta,
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
     * Handle the user_meta "deleted" event.
     *
     * @param  \App\UserMeta $user_meta
     * @return void
     */
    public function deleted(user_meta $user_meta)
    {
        $model = Model::where('name', 'user_meta')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $user_meta,
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
     * Handle the user_meta "restored" event.
     *
     * @param  \App\UserMeta $user_meta
     * @return void
     */
    public function restored(user_meta $user_meta)
    {
        //
    }

    /**
     * Handle the user_meta "force deleted" event.
     *
     * @param  \App\UserMeta $user_meta
     * @return void
     */
    public function forceDeleted(user_meta $user_meta)
    {
        //
    }
}