<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateContactsTableInsertOrgTeamKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('org_teams', function (Blueprint $table) {
            $table->foreign('contact_id')->references('id')->on('contacts')->onUpdate('set null')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('org_teams', function (Blueprint $table) {
            
        });
    }
}
