<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('forum_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')->constrained('forum_topics')->onDelete('cascade');
            $table->foreignId('author_id')->constrained('users');
            $table->text('content');
            $table->foreignId('parent_reply_id')->nullable()->constrained('forum_replies');
            $table->enum('status', ['active', 'deleted'])->default('active');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forum_replies');
    }
};
