<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStatusReadiesTableInsertPilotProjectKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pilot_projects', function (Blueprint $table) {
            $table->foreign('status_ready_id')->references('id')->on('status_readies')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_projects', function (Blueprint $table) {
            
        });
    }
}
