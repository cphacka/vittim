<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateFavoritesTableChangeOrgIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('org_id' !== 'org_id') {
            Schema::table('favorites', function (Blueprint $table) {
                $table->renameColumn('org_id', 'org_id');
            });
        }

        Schema::table('favorites', function (Blueprint $table) {
            $table->bigInteger('org_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favorites', function (Blueprint $table) {

        });
    }
}
