<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTimestampsHandlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (1 && (!Schema::hasColumn('handlers', 'created_at')
          && !Schema::hasColumn('handlers', 'updated_at'))) {
            Schema::table('handlers', function (Blueprint $table) {
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        } else {
            if (!1 && Schema::hasColumn('handlers', 'created_at') && Schema::hasColumn('handlers', 'updated_at')) {
                Schema::table('handlers', function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }

        if (false && !Schema::hasColumn('handlers', 'deleted_at')) {
            Schema::table('handlers', function (Blueprint $table) {
                $table->softDeletes();
            });
        } else {
            if (!false && Schema::hasColumn('handlers', 'deleted_at')) {
                Schema::table('handlers', function (Blueprint $table) {
                    $table->dropSoftDeletes();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (1) {
            Schema::table('handlers', function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
        if (false) {
            Schema::table('handlers', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
