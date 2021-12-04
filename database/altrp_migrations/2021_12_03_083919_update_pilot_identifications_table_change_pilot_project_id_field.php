<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotIdentificationsTableChangePilotProjectIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('pilot_project_id' !== 'pilot_project_id') {
            Schema::table('pilot_identifications', function (Blueprint $table) {
                $table->renameColumn('pilot_project_id', 'pilot_project_id');
            });
        }

        Schema::table('pilot_identifications', function (Blueprint $table) {
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
        Schema::table('pilot_identifications', function (Blueprint $table) {

        });
    }
}
