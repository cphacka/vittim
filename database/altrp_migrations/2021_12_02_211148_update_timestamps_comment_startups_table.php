<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTimestampsCommentStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (1 && (!Schema::hasColumn('comment_startups', 'created_at')
          && !Schema::hasColumn('comment_startups', 'updated_at'))) {
            Schema::table('comment_startups', function (Blueprint $table) {
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        } else {
            if (!1 && Schema::hasColumn('comment_startups', 'created_at') && Schema::hasColumn('comment_startups', 'updated_at')) {
                Schema::table('comment_startups', function (Blueprint $table) {
                    $table->dropTimestamps();
                });
            }
        }

        if (false && !Schema::hasColumn('comment_startups', 'deleted_at')) {
            Schema::table('comment_startups', function (Blueprint $table) {
                $table->softDeletes();
            });
        } else {
            if (!false && Schema::hasColumn('comment_startups', 'deleted_at')) {
                Schema::table('comment_startups', function (Blueprint $table) {
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
            Schema::table('comment_startups', function (Blueprint $table) {
                $table->dropTimestamps();
            });
        }
        if (false) {
            Schema::table('comment_startups', function (Blueprint $table) {
                $table->dropSoftDeletes();
            });
        }
    }
}
