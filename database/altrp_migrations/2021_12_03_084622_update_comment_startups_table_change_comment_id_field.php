<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCommentStartupsTableChangeCommentIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('comment_id' !== 'comment_id') {
            Schema::table('comment_startups', function (Blueprint $table) {
                $table->renameColumn('comment_id', 'comment_id');
            });
        }

        Schema::table('comment_startups', function (Blueprint $table) {
            $table->bigInteger('comment_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_startups', function (Blueprint $table) {

        });
    }
}
