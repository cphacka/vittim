<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateOrgTeamsTableChangeContactIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('contact_id' !== 'contact_id') {
            Schema::table('org_teams', function (Blueprint $table) {
                $table->renameColumn('contact_id', 'contact_id');
            });
        }

        Schema::table('org_teams', function (Blueprint $table) {
            $table->bigInteger('contact_id')->unsigned()->change();
            
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
