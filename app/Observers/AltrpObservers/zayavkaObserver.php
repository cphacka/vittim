<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\zayavkaEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\zayavka;
use Illuminate\Foundation\Bus\DispatchesJobs;

class zayavkaObserver extends BaseObserver
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
     * Handle the zayavka "created" event.
     *
     * @param  \App\AltrpModels\zayavka $zayavka
     * @return void
     */
    public function created(zayavka $zayavka)
    {
        $model = Model::where('name', 'zayavka')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $zayavka,
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
     * Handle the zayavka "updated" event.
     *
     * @param  \App\AltrpModels\zayavka $zayavka
     * @return void
     */
    public function updated(zayavka $zayavka)
    {
        $model = Model::where('name', 'zayavka')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $zayavka,
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
     * Handle the zayavka "deleted" event.
     *
     * @param  \App\AltrpModels\zayavka $zayavka
     * @return void
     */
    public function deleted(zayavka $zayavka)
    {
        $model = Model::where('name', 'zayavka')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $zayavka,
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
     * Handle the zayavka "restored" event.
     *
     * @param  \App\AltrpModels\zayavka $zayavka
     * @return void
     */
    public function restored(zayavka $zayavka)
    {
        //
    }

    /**
     * Handle the zayavka "force deleted" event.
     *
     * @param  \App\AltrpModels\zayavka $zayavka
     * @return void
     */
    public function forceDeleted(zayavka $zayavka)
    {
        //
    }
}