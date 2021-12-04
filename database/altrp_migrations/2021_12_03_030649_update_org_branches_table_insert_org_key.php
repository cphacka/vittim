<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateOrgBranchesTableInsertOrgKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orgs', function (Blueprint $table) {
            $table->foreign('org_branch_id')->references('id')->on('org_branches')->onUpdate('set null')->onDelete('set null');
            
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
