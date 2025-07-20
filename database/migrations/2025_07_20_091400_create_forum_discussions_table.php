<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumDiscussionsTable extends Migration
{
    public function up()
    {
        Schema::create('forum_discussions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 255)->notNull();
            $table->text('content')->notNull();
            $table->integer('like_count')->default(0);
            $table->integer('reply_count')->default(0);
            $table->boolean('is_pinned')->default(false);
            $table->boolean('is_locked')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forum_discussions');
    }
}
