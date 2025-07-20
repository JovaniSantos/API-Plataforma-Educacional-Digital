<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->date('attendance_date');
            $table->enum('status', ['present', 'absent', 'late', 'excused'])->default('present');
            $table->text('notes')->nullable();
            $table->foreignId('recorded_by')->constrained('teachers');
            $table->timestamp('created_at')->useCurrent();
            $table->unique(['student_id', 'class_id', 'subject_id', 'attendance_date'], 'unique_attendance');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
