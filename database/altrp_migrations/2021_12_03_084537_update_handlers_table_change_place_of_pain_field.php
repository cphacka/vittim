<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateHandlersTableChangePlaceOfPainField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('place_of_pain' !== 'place_of_pain') {
            Schema::table('handlers', function (Blueprint $table) {
                $table->renameColumn('place_of_pain', 'place_of_pain');
            });
        }

        Schema::table('handlers', function (Blueprint $table) {
            $table->string('place_of_pain', 191)->change();
            
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
