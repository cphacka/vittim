<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\user_altEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\user_alt;
use Illuminate\Foundation\Bus\DispatchesJobs;

class user_altObserver extends BaseObserver
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
     * Handle the user_alt "created" event.
     *
     * @param  \App\AltrpModels\user_alt $user_alt
     * @return void
     */
    public function created(user_alt $user_alt)
    {
        $model = Model::where('name', 'user_alt')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $user_alt,
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
     * Handle the user_alt "updated" event.
     *
     * @param  \App\AltrpModels\user_alt $user_alt
     * @return void
     */
    public function updated(user_alt $user_alt)
    {
        $model = Model::where('name', 'user_alt')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $user_alt,
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
     * Handle the user_alt "deleted" event.
     *
     * @param  \App\AltrpModels\user_alt $user_alt
     * @return void
     */
    public function deleted(user_alt $user_alt)
    {
        $model = Model::where('name', 'user_alt')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $user_alt,
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
     * Handle the user_alt "restored" event.
     *
     * @param  \App\AltrpModels\user_alt $user_alt
     * @return void
     */
    public function restored(user_alt $user_alt)
    {
        //
    }

    /**
     * Handle the user_alt "force deleted" event.
     *
     * @param  \App\AltrpModels\user_alt $user_alt
     * @return void
     */
    public function forceDeleted(user_alt $user_alt)
    {
        //
    }
}