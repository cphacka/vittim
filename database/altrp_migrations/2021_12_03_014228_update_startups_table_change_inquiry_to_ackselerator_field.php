<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateStartupsTableChangeInquiryToAckseleratorField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('inquiry_to_ackselerator' !== 'inquiry_to_ackselerator') {
            Schema::table('startups', function (Blueprint $table) {
                $table->renameColumn('inquiry_to_ackselerator', 'inquiry_to_ackselerator');
            });
        }

        Schema::table('startups', function (Blueprint $table) {
            $table->string('inquiry_to_ackselerator', 191)->change();
            
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
