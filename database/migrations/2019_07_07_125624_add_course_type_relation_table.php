<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCourseTypeRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_types_rel', function (Blueprint $table) {
            $table->integer('course_id')->unsigned();
            $table->tinyInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('courses_types');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->unique(['course_id', 'type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_types_rel');
    }
}
