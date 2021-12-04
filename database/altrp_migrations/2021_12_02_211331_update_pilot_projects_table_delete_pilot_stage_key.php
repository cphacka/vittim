<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotProjectsTableDeletePilotStageKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pilot_stages', function (Blueprint $table) {
            $table->dropForeign('vit_pilot_stages_pilot_id_foreign');;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_stages', function (Blueprint $table) {
            
        });
    }
}
