<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumLikesTable extends Migration
{
    public function up()
    {
        Schema::create('forum_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('discussion_id')->nullable();
            $table->unsignedBigInteger('reply_id')->nullable();
            $table->timestamp('created_at')->default(now());
            $table->unique(['user_id', 'discussion_id', 'reply_id']);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('discussion_id')->references('id')->on('forum_discussions')->onDelete('cascade');
            $table->foreign('reply_id')->references('id')->on('forum_replies')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forum_likes');
    }
}
