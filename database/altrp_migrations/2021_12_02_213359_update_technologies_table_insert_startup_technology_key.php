<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTechnologiesTableInsertStartupTechnologyKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('startup_technologies', function (Blueprint $table) {
            $table->foreign('technology_id')->references('id')->on('technologies')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('startup_technologies', function (Blueprint $table) {
            
        });
    }
}
