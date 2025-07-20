<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('calendar_events')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users');
            $table->enum('status', ['confirmed', 'pending', 'declined'])->default('pending');
            $table->timestamp('created_at')->useCurrent();
            $table->unique(['event_id', 'user_id'], 'unique_participant');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_participants');
    }
};
