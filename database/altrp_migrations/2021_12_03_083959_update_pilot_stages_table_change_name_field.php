<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePilotStagesTableChangeNameField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('name' !== 'name') {
            Schema::table('pilot_stages', function (Blueprint $table) {
                $table->renameColumn('name', 'name');
            });
        }

        Schema::table('pilot_stages', function (Blueprint $table) {
            $table->string('name', 191)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pilot_stages', function (Blueprint $table) {

        });
    }
}
