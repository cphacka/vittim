<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateFlowsTableChangeFileUrlFieldV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('file_url' !== 'file_url') {
            Schema::table('flows', function (Blueprint $table) {
                $table->renameColumn('file_url', 'file_url');
            });
        }

        Schema::table('flows', function (Blueprint $table) {
            $table->string('file_url', 191)->unsigned()->change();
            
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
