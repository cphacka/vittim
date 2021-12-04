<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotTeamsTableChangePilotIdFieldV3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('pilot_id' !== 'pilot_id') {
            Schema::table('pilot_teams', function (Blueprint $table) {
                $table->renameColumn('pilot_id', 'pilot_id');
            });
        }

        Schema::table('pilot_teams', function (Blueprint $table) {
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_teams', function (Blueprint $table) {

        });
    }
}
