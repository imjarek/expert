<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCoursesTableAddDuration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function ($table){
            $table->text('duration')->nullable();
            $table->text('index')->nullable();
            $table->text('level')->nullable();
            //$table->dropColumn('type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function ($table) {
            $table->dropColumn('duration');
            $table->dropColumn('index');
            $table->dropColumn('level');
            //$table->tinyInteger('course_type_id');
        });
    }
}
