<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('teacher_number', 20)->unique();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('date_of_birth');
            $table->enum('gender', ['M', 'F']);
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->date('hire_date');
            $table->string('qualification', 255)->nullable();
            $table->string('specialization', 255)->nullable();
            $table->integer('experience_years')->default(0);
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
