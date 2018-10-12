<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('picture_category_id')->unsigned();
            $table->foreign('picture_category_id')->references('id')->on('picture_categories')->onDelete('cascade');
            $table->string('picture_name');
            $table->string('picture_title')->nullable();
            $table->string('picture_description')->nullable();
            $table->string('picture_title_left')->nullable();
            $table->string('picture_title_right')->nullable();
            $table->string('picture_description_left')->nullable();
            $table->string('picture_description_right')->nullable();
            $table->string('picture_link')->nullable();
            $table->string('picture');
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
        Schema::dropIfExists('manage_pictures');
    }
}
