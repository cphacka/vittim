<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateFlowsTableChangeStartupIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('startup_id' !== 'startup_id') {
            Schema::table('flows', function (Blueprint $table) {
                $table->renameColumn('startup_id', 'startup_id');
            });
        }

        Schema::table('flows', function (Blueprint $table) {
            $table->bigInteger('startup_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flows', function (Blueprint $table) {

        });
    }
}
