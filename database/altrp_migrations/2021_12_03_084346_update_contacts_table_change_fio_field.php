<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateContactsTableChangeFioField extends Migration
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
            $table->string('fio', 191)->change();
            
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
