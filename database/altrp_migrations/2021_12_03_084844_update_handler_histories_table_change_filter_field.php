<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateHandlerHistoriesTableChangeFilterField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('filter' !== 'filter') {
            Schema::table('handler_histories', function (Blueprint $table) {
                $table->renameColumn('filter', 'filter');
            });
        }

        Schema::table('handler_histories', function (Blueprint $table) {
            $table->bigInteger('filter')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('handler_histories', function (Blueprint $table) {

        });
    }
}
