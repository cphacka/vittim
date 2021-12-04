<?php

namespace App\Observers\AltrpObservers;

use App\Altrp\Model;
// use App\Events\AltrpEvents\org_teamEvent;
use App\Helpers\Classes\CurrentEnvironment;
use App\Jobs\RunRobotsJob;
use App\Observers\BaseObserver;
use App\Services\Robots\RobotsService;
use App\AltrpModels\org_team;
use Illuminate\Foundation\Bus\DispatchesJobs;

class org_teamObserver extends BaseObserver
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
     * Handle the org_team "created" event.
     *
     * @param  \App\AltrpModels\org_team $org_team
     * @return void
     */
    public function created(org_team $org_team)
    {
        $model = Model::where('name', 'org_team')->first();
        $source = $model->altrp_sources->where('type', 'add')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $org_team,
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
     * Handle the org_team "updated" event.
     *
     * @param  \App\AltrpModels\org_team $org_team
     * @return void
     */
    public function updated(org_team $org_team)
    {
        $model = Model::where('name', 'org_team')->first();
        $source = $model->altrp_sources->where('type', 'update')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $org_team,
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
     * Handle the org_team "deleted" event.
     *
     * @param  \App\AltrpModels\org_team $org_team
     * @return void
     */
    public function deleted(org_team $org_team)
    {
        $model = Model::where('name', 'org_team')->first();
        $source = $model->altrp_sources->where('type', 'delete')->first();
        $columns = explode(',',$model->table->columns->implode('name',','));

        $data = [
            'model' => $model,
            'source' => $source,
            'columns' => $columns,
            'record' => $org_team,
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
     * Handle the org_team "restored" event.
     *
     * @param  \App\AltrpModels\org_team $org_team
     * @return void
     */
    public function restored(org_team $org_team)
    {
        //
    }

    /**
     * Handle the org_team "force deleted" event.
     *
     * @param  \App\AltrpModels\org_team $org_team
     * @return void
     */
    public function forceDeleted(org_team $org_team)
    {
        //
    }
}