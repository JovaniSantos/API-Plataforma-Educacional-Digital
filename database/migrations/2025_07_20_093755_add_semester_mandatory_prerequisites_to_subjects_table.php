<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->integer('semester')->nullable();
            $table->boolean('is_mandatory')->default(true);
            $table->json('prerequisites')->nullable();
        });
    }

    public function down()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn(['semester', 'is_mandatory', 'prerequisites']);
        });
    }
};

