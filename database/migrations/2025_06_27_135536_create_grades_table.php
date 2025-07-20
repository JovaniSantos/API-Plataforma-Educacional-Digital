<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('class_id')->constrained('classes');
            $table->string('academic_year', 9);
            $table->decimal('quarter_1', 4, 2)->nullable();
            $table->decimal('quarter_2', 4, 2)->nullable();
            $table->decimal('quarter_3', 4, 2)->nullable();
            $table->decimal('final_exam', 4, 2)->nullable();
            $table->decimal('final_grade', 4, 2)->nullable();
            $table->enum('status', ['passed', 'failed', 'incomplete'])->default('incomplete');
            $table->timestamps();
            $table->unique(['student_id', 'subject_id', 'class_id', 'academic_year'], 'unique_grade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
