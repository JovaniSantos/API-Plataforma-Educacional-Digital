<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('calendar_events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
            $table->foreignId('class_id')->nullable()->constrained('classes');
            $table->foreignId('subject_id')->nullable()->constrained('subjects');
            $table->foreignId('created_by')->constrained('users');
            $table->enum('event_type', ['exam', 'meeting', 'holiday', 'other'])->default('other');
            $table->enum('status', ['active', 'cancelled'])->default('active');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calendar_events');
    }
};
