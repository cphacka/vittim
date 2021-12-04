<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotMeetingsTableChangePilotProjectIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('pilot_project_id' !== 'pilot_project_id') {
            Schema::table('pilot_meetings', function (Blueprint $table) {
                $table->renameColumn('pilot_project_id', 'pilot_project_id');
            });
        }

        Schema::table('pilot_meetings', function (Blueprint $table) {
            $table->bigInteger('pilot_project_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_meetings', function (Blueprint $table) {

        });
    }
}
