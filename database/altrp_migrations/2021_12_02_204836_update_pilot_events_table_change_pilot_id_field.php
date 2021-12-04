<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotEventsTableChangePilotIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('pilot_id' !== 'pilot_id') {
            Schema::table('pilot_events', function (Blueprint $table) {
                $table->renameColumn('pilot_id', 'pilot_id');
            });
        }

        Schema::table('pilot_events', function (Blueprint $table) {
            $table->bigInteger('pilot_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_events', function (Blueprint $table) {

        });
    }
}
