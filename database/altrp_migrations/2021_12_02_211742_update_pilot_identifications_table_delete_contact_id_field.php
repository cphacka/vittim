<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotIdentificationsTableDeleteContactIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pilot_identifications', function (Blueprint $table) {
            $table->dropColumn('contact_id');
            
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
