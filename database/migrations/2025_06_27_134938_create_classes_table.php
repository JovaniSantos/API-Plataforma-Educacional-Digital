<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('code')->unique();
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->enum('grade_level', ['10', '11', '12']);
            $table->string('section', 10);
            $table->string('education_level');
            $table->foreignId('school_id')->constrained('schools')->onDelete('cascade');
            $table->foreignId('coordinator_id')->constrained('admins')->onDelete('cascade');
            $table->string('academic_year', 9);
            $table->unsignedTinyInteger('semester')->nullable();
            $table->integer('max_students')->default(35);
            $table->string('classroom')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

            $table->unique(['name', 'school_id', 'academic_year'], 'unique_class');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
