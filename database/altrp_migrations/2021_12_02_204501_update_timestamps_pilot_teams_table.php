<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTimestampsPilotTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (1 && (!Schema::hasColumn('pilot_teams', 'created_at')
          && !Schema::hasColumn('pilot_teams', 'updated_at'))) {
            Schema::table('pilot_teams', function (Blueprint $table) {
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        } else {
            if (!1 && Schema::hasColumn('pilot_teams', 'created_at') && Schema::hasColumn('pilot_teams', 'updated_at')) {
                Schema::table('pilot_teams', function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }

        if (false && !Schema::hasColumn('pilot_teams', 'deleted_at')) {
            Schema::table('pilot_teams', function (Blueprint $table) {
                $table->softDeletes();
            });
        } else {
            if (!false && Schema::hasColumn('pilot_teams', 'deleted_at')) {
                Schema::table('pilot_teams', function (Blueprint $table) {
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
            Schema::table('pilot_teams', function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
        if (false) {
            Schema::table('pilot_teams', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
