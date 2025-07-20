<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('student_number', 20)->unique();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('date_of_birth');
            $table->enum('gender', ['M', 'F']);
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->date('enrollment_date');
            $table->string('parent_name', 200)->nullable();
            $table->string('parent_phone', 20)->nullable();
            $table->string('parent_email', 255)->nullable();
            $table->string('emergency_contact', 200)->nullable();
            $table->string('emergency_phone', 20)->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
