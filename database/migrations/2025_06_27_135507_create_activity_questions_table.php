<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')->constrained('activities')->onDelete('cascade');
            $table->text('question_text');
            $table->enum('question_type', ['multiple_choice', 'true_false', 'short_answer', 'essay']);
            $table->decimal('points', 5, 2);
            $table->integer('order_number');
            $table->json('options')->nullable();
            $table->text('correct_answer')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_questions');
    }
};
