<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateContactsTableChangePhoneField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('phone' !== 'phone') {
            Schema::table('contacts', function (Blueprint $table) {
                $table->renameColumn('phone', 'phone');
            });
        }

        Schema::table('contacts', function (Blueprint $table) {
            $table->integer('phone')->change();
            
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
