<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teacher_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->string('academic_year', 9);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_at')->useCurrent();
            $table->unique(['teacher_id', 'class_id', 'subject_id', 'academic_year'], 'unique_assignment');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teacher_assignments');
    }
};
