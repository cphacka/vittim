<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotMeetingsTableChangeCommentField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('comment' !== 'comment') {
            Schema::table('pilot_meetings', function (Blueprint $table) {
                $table->renameColumn('comment', 'comment');
            });
        }

        Schema::table('pilot_meetings', function (Blueprint $table) {
            $table->string('comment', 191)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_meetings', function (Blueprint $table) {

        });
    }
}
