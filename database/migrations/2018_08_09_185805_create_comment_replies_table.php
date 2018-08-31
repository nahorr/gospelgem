<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->unsigned();
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('comment_reply');
            $table->boolean('approved')->default(true);
            $table->boolean('show_profile_picture')->default(true);
            $table->integer('comment_reply_likes')->default(0);
            $table->integer('comment_reply_dislikes')->default(0);
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
        Schema::dropIfExists('comment_replies');
    }
}
