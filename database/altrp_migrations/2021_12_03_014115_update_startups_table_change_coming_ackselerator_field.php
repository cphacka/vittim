<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeComingAckseleratorField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('coming_ackselerator' !== 'coming_ackselerator') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('coming_ackselerator', 'coming_ackselerator');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->string('coming_ackselerator', 191)->change();
            
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
