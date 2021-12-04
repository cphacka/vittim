<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTimestampsPilotStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (1 && (!Schema::hasColumn('pilot_stages', 'created_at')
          && !Schema::hasColumn('pilot_stages', 'updated_at'))) {
            Schema::table('pilot_stages', function (Blueprint $table) {
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        } else {
            if (!1 && Schema::hasColumn('pilot_stages', 'created_at') && Schema::hasColumn('pilot_stages', 'updated_at')) {
                Schema::table('pilot_stages', function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }

        if (false && !Schema::hasColumn('pilot_stages', 'deleted_at')) {
            Schema::table('pilot_stages', function (Blueprint $table) {
                $table->softDeletes();
            });
        } else {
            if (!false && Schema::hasColumn('pilot_stages', 'deleted_at')) {
                Schema::table('pilot_stages', function (Blueprint $table) {
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
            Schema::table('pilot_stages', function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
        if (false) {
            Schema::table('pilot_stages', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
