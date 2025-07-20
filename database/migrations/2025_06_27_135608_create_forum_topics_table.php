<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('forum_topics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('forum_categories');
            $table->string('title', 255);
            $table->text('content');
            $table->foreignId('author_id')->constrained('users');
            $table->enum('status', ['open', 'closed', 'pinned'])->default('open');
            $table->integer('views_count')->default(0);
            $table->integer('replies_count')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forum_topics');
    }
};
