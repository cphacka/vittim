<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeMediaIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('media_id' !== 'media_id') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('media_id', 'media_id');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->bigInteger('media_id')->unsigned()->change();
            
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
