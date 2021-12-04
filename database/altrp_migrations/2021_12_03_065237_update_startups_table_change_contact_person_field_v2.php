<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeContactPersonFieldV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('contact_person' !== 'contact_person') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('contact_person', 'contact_person');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->bigInteger('contact_person')->unsigned()->change();
            
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
