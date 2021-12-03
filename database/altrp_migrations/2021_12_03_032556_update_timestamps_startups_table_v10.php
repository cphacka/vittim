<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTimestampsStartupsTableV10 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (false && (!Schema::hasColumn('startups', 'created_at')
          && !Schema::hasColumn('startups', 'updated_at'))) {
            Schema::table('startups', function (Blueprint $table) {
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        } else {
            if (!false && Schema::hasColumn('startups', 'created_at') && Schema::hasColumn('startups', 'updated_at')) {
                Schema::table('startups', function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }

        if (false && !Schema::hasColumn('startups', 'deleted_at')) {
            Schema::table('startups', function (Blueprint $table) {
                $table->softDeletes();
            });
        } else {
            if (!false && Schema::hasColumn('startups', 'deleted_at')) {
                Schema::table('startups', function (Blueprint $table) {
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
        if (false) {
            Schema::table('startups', function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
        if (false) {
            Schema::table('startups', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
