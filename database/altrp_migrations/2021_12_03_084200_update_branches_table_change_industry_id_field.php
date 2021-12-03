<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateBranchesTableChangeIndustryIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('industry_id' !== 'industry_id') {
            Schema::table('branches', function (Blueprint $table) {
                $table->renameColumn('industry_id', 'industry_id');
            });
        }

        Schema::table('branches', function (Blueprint $table) {
            $table->bigInteger('industry_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('branches', function (Blueprint $table) {

        });
    }
}
