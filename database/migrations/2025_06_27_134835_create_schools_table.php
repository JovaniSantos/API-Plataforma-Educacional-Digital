<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('code', 20)->unique();
            $table->text('address');
            $table->string('phone', 20)->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->string('email', 255)->nullable();
            $table->string('principal_name', 200)->nullable();
            $table->date('established_date')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
