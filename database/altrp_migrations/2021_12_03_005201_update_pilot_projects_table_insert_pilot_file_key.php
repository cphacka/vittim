<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotProjectsTableInsertPilotFileKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pilot_files', function (Blueprint $table) {
            $table->foreign('pilot_project_id')->references('id')->on('pilot_projects')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_files', function (Blueprint $table) {
            
        });
    }
}
