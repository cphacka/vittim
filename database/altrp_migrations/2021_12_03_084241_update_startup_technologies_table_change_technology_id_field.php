<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupTechnologiesTableChangeTechnologyIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('technology_id' !== 'technology_id') {
            Schema::table('startup_technologies', function (Blueprint $table) {
                $table->renameColumn('technology_id', 'technology_id');
            });
        }

        Schema::table('startup_technologies', function (Blueprint $table) {
            $table->bigInteger('technology_id')->unsigned()->change();
            
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
