<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTimestampsPilotProjectsTableV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (false && (!Schema::hasColumn('pilot_projects', 'created_at')
          && !Schema::hasColumn('pilot_projects', 'updated_at'))) {
            Schema::table('pilot_projects', function (Blueprint $table) {
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        } else {
            if (!false && Schema::hasColumn('pilot_projects', 'created_at') && Schema::hasColumn('pilot_projects', 'updated_at')) {
                Schema::table('pilot_projects', function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }

        if (false && !Schema::hasColumn('pilot_projects', 'deleted_at')) {
            Schema::table('pilot_projects', function (Blueprint $table) {
                $table->softDeletes();
            });
        } else {
            if (!false && Schema::hasColumn('pilot_projects', 'deleted_at')) {
                Schema::table('pilot_projects', function (Blueprint $table) {
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
            Schema::table('pilot_projects', function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
        if (false) {
            Schema::table('pilot_projects', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
