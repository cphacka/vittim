<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateOrgsTableChangeOrgBranchIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('org_branch_id' !== 'org_branch_id') {
            Schema::table('orgs', function (Blueprint $table) {
                $table->renameColumn('org_branch_id', 'org_branch_id');
            });
        }

        Schema::table('orgs', function (Blueprint $table) {
            $table->bigInteger('org_branch_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orgs', function (Blueprint $table) {

        });
    }
}
