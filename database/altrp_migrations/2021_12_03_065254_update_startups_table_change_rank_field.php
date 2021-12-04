<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeRankField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('rank' !== 'rank') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('rank', 'rank');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->integer('rank')->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('startups', function (Blueprint $table) {

        });
    }
}
