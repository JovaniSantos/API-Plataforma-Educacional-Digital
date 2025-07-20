<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->enum('type', ['exam', 'quiz', 'assignment', 'project']);
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->decimal('total_points', 5, 2);
            $table->integer('duration_minutes')->default(0);
            $table->dateTime('due_date');
            $table->dateTime('start_date')->nullable();
            $table->text('instructions')->nullable();
            $table->enum('status', ['draft', 'published', 'closed'])->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
