<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherAssignmentRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_assignment_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('class_id');
            $table->date('request_date')->default(now());
            $table->string('status', 20)->default('pending')->check("status IN ('pending', 'approved', 'rejected')");
            $table->unsignedBigInteger('requested_by');
            $table->text('admin_notes')->nullable();
            $table->unsignedBigInteger('processed_by')->nullable();
            $table->date('processed_date')->nullable();
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('requested_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('processed_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_assignment_requests');
    }
}
