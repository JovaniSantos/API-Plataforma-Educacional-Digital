<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('class_id')->constrained('classes');
            $table->date('enrollment_date');
            $table->enum('status', ['active', 'transferred', 'graduated', 'dropped'])->default('active');
            $table->string('academic_year', 9);
            $table->timestamp('created_at')->useCurrent();
            $table->unique(['student_id', 'class_id', 'academic_year'], 'unique_enrollment');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
