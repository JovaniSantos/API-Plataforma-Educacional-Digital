<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')->constrained('activities');
            $table->foreignId('student_id')->constrained('students');
            $table->dateTime('submission_date');
            $table->text('content')->nullable();
            $table->json('attachments')->nullable();
            $table->enum('status', ['submitted', 'graded', 'late'])->default('submitted');
            $table->decimal('grade', 5, 2)->nullable();
            $table->text('feedback')->nullable();
            $table->foreignId('graded_by')->nullable()->constrained('teachers');
            $table->dateTime('graded_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->unique(['activity_id', 'student_id'], 'unique_submission');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
