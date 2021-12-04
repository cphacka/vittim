<?php


namespace App\Providers\AltrpProviders;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try{
          \App\AltrpModels\startup::observe(\App\Observers\AltrpObservers\startupObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_project::observe(\App\Observers\AltrpObservers\pilot_projectObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_identification::observe(\App\Observers\AltrpObservers\pilot_identificationObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_effect::observe(\App\Observers\AltrpObservers\pilot_effectObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_stage::observe(\App\Observers\AltrpObservers\pilot_stageObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_team::observe(\App\Observers\AltrpObservers\pilot_teamObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_budget::observe(\App\Observers\AltrpObservers\pilot_budgetObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_event::observe(\App\Observers\AltrpObservers\pilot_eventObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\technology::observe(\App\Observers\AltrpObservers\technologyObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\industry::observe(\App\Observers\AltrpObservers\industryObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\branch::observe(\App\Observers\AltrpObservers\branchObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\startup_branch::observe(\App\Observers\AltrpObservers\startup_branchObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\startup_technology::observe(\App\Observers\AltrpObservers\startup_technologyObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\status_stage::observe(\App\Observers\AltrpObservers\status_stageObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\status_ready::observe(\App\Observers\AltrpObservers\status_readyObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\contact::observe(\App\Observers\AltrpObservers\contactObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\org::observe(\App\Observers\AltrpObservers\orgObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\org_team::observe(\App\Observers\AltrpObservers\org_teamObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_meeting::observe(\App\Observers\AltrpObservers\pilot_meetingObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_status::observe(\App\Observers\AltrpObservers\pilot_statusObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_gallery::observe(\App\Observers\AltrpObservers\pilot_galleryObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\handler::observe(\App\Observers\AltrpObservers\handlerObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\comment::observe(\App\Observers\AltrpObservers\commentObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\comment_startup::observe(\App\Observers\AltrpObservers\comment_startupObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\comment_pilot::observe(\App\Observers\AltrpObservers\comment_pilotObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\flow::observe(\App\Observers\AltrpObservers\flowObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\flow_type::observe(\App\Observers\AltrpObservers\flow_typeObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\favorite::observe(\App\Observers\AltrpObservers\favoriteObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\user_alt::observe(\App\Observers\AltrpObservers\user_altObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\media_alt::observe(\App\Observers\AltrpObservers\media_altObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\startup_news::observe(\App\Observers\AltrpObservers\startup_newsObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\comment_startup_news::observe(\App\Observers\AltrpObservers\comment_startup_newsObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\handler_history::observe(\App\Observers\AltrpObservers\handler_historyObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\pilot_file::observe(\App\Observers\AltrpObservers\pilot_fileObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\count_person::observe(\App\Observers\AltrpObservers\count_personObserver::class);
        } catch(\Throwable $e){

        }

        try{
          \App\AltrpModels\org_branch::observe(\App\Observers\AltrpObservers\org_branchObserver::class);
        } catch(\Throwable $e){

        }


    }
}