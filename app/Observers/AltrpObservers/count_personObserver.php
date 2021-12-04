<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\count_personEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\count_person;
use Illuminate\Foundation\Bus\DispatchesJobs;

class count_personObserver extends BaseObserver
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
     * Handle the count_person "created" event.
     *
     * @param  \App\AltrpModels\count_person $count_person
     * @return void
     */
    public function created(count_person $count_person)
    {
        $model = Model::where('name', 'count_person')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $count_person,
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
     * Handle the count_person "updated" event.
     *
     * @param  \App\AltrpModels\count_person $count_person
     * @return void
     */
    public function updated(count_person $count_person)
    {
        $model = Model::where('name', 'count_person')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $count_person,
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
     * Handle the count_person "deleted" event.
     *
     * @param  \App\AltrpModels\count_person $count_person
     * @return void
     */
    public function deleted(count_person $count_person)
    {
        $model = Model::where('name', 'count_person')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $count_person,
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
     * Handle the count_person "restored" event.
     *
     * @param  \App\AltrpModels\count_person $count_person
     * @return void
     */
    public function restored(count_person $count_person)
    {
        //
    }

    /**
     * Handle the count_person "force deleted" event.
     *
     * @param  \App\AltrpModels\count_person $count_person
     * @return void
     */
    public function forceDeleted(count_person $count_person)
    {
        //
    }
}