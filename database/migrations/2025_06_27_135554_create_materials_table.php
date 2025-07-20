<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('file_path');
            $table->enum('file_type', ['pdf', 'doc', 'video', 'image', 'other']);
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('uploaded_by')->constrained('teachers');
            $table->enum('status', ['active', 'archived'])->default('active');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
