<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeOnModeratedField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('on_moderated' !== 'on_moderated') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('on_moderated', 'on_moderated');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->integer('on_moderated')->change();
            
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
