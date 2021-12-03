<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCommentStartupNewsTableChangeStartupNewsIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('startup_news_id' !== 'startup_news_id') {
            Schema::table('comment_startup_news', function (Blueprint $table) {
                $table->renameColumn('startup_news_id', 'startup_news_id');
            });
        }

        Schema::table('comment_startup_news', function (Blueprint $table) {
            $table->bigInteger('startup_news_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_startup_news', function (Blueprint $table) {

        });
    }
}
