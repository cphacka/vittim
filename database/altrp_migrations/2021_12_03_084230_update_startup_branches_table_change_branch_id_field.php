<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupBranchesTableChangeBranchIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('branch_id' !== 'branch_id') {
            Schema::table('startup_branches', function (Blueprint $table) {
                $table->renameColumn('branch_id', 'branch_id');
            });
        }

        Schema::table('startup_branches', function (Blueprint $table) {
            $table->bigInteger('branch_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('startup_branches', function (Blueprint $table) {

        });
    }
}
