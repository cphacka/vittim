<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateFlowsTableChangeFlowTypeIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ('flow_type_id' !== 'flow_type_id') {
            Schema::table('flows', function (Blueprint $table) {
                $table->renameColumn('flow_type_id', 'flow_type_id');
            });
        }

        Schema::table('flows', function (Blueprint $table) {
            $table->bigInteger('flow_type_id')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flows', function (Blueprint $table) {

        });
    }
}
