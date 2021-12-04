<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotTeamsTableChangeContactIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('contact_id' !== 'contact_id') {
            Schema::table('pilot_teams', function (Blueprint $table) {
                $table->renameColumn('contact_id', 'contact_id');
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
