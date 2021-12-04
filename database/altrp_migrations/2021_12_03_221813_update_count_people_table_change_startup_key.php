<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateCountPeopleTableChangeStartupKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('startups', function (Blueprint $table) {
            $table->dropForeign('vit_startups_contact_person_foreign');
        });

        Schema::table('startups', function (Blueprint $table) {
            $table->foreign('count_people')->references('id')->on('count_people')->onUpdate('set null')->onDelete('set null');
            
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
