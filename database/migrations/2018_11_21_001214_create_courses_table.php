<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_category_id')->unsigned();
            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('cascade');
            $table->string('course_code');
            $table->string('course_name');
            $table->string('course_picture');
            $table->string('course_description');
            $table->string('course_moodle_link')->nullable();
            $table->string('course_mentor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
