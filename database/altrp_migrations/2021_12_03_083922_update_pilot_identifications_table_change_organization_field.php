<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotIdentificationsTableChangeOrganizationField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('organization' !== 'organization') {
            Schema::table('pilot_identifications', function (Blueprint $table) {
                $table->renameColumn('organization', 'organization');
            });
        }

        Schema::table('pilot_identifications', function (Blueprint $table) {
            $table->string('organization', 191)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_identifications', function (Blueprint $table) {

        });
    }
}
