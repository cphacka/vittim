<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupNewsTableChangeTitleField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('title' !== 'title') {
            Schema::table('startup_news', function (Blueprint $table) {
                $table->renameColumn('title', 'title');
            });
        }

        Schema::table('startup_news', function (Blueprint $table) {
            $table->string('title', 191)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('startup_news', function (Blueprint $table) {

        });
    }
}
