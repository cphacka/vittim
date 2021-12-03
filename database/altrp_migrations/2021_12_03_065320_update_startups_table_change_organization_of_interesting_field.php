<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeOrganizationOfInterestingField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('organization_of_interesting' !== 'organization_of_interesting') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('organization_of_interesting', 'organization_of_interesting');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->bigInteger('organization_of_interesting')->unsigned()->change();
            
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
