<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCommentsTableInsertCommentPilotKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment_pilots', function (Blueprint $table) {
            $table->foreign('comment_id')->references('id')->on('comments')->onUpdate('set null')->onDelete('set null');
            
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
