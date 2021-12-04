<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateContactsTableChangeFioFieldV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('fio' !== 'fio') {
            Schema::table('contacts', function (Blueprint $table) {
                $table->renameColumn('fio', 'fio');
            });
        }

        Schema::table('contacts', function (Blueprint $table) {
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {

        });
    }
}
