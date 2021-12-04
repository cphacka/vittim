<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateHandlersTableInsertManifestationOfPainField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('handlers', function (Blueprint $table) {
            $table->string('manifestation_of_pain', 191)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('handlers', function (Blueprint $table) {
            
        });
    }
}
