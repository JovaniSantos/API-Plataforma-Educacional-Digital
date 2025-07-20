<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('submission_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->onDelete('cascade');
            $table->foreignId('question_id')->constrained('activity_questions');
            $table->text('answer_text')->nullable();
            $table->decimal('points_earned', 5, 2)->default(0);
            $table->boolean('is_correct')->default(false);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submission_answers');
    }
};
