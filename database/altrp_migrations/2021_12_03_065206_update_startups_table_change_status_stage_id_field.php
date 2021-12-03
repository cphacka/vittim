<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeStatusStageIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('status_stage_id' !== 'status_stage_id') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('status_stage_id', 'status_stage_id');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->bigInteger('status_stage_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('startups', function (Blueprint $table) {

        });
    }
}
