<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCommentPilotsTableChangePilotProjectIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('pilot_project_id' !== 'pilot_project_id') {
            Schema::table('comment_pilots', function (Blueprint $table) {
                $table->renameColumn('pilot_project_id', 'pilot_project_id');
            });
        }

        Schema::table('comment_pilots', function (Blueprint $table) {
            $table->bigInteger('pilot_project_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_pilots', function (Blueprint $table) {

        });
    }
}
