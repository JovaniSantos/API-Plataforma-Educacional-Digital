<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->notNull();
            $table->text('description')->nullable();
            $table->string('type', 50)->notNull()->check("type IN ('quiz', 'exam', 'assignment', 'project', 'presentation')");
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->decimal('total_points', 6, 2)->notNull();
            $table->decimal('weight', 5, 2)->default(1.0);
            $table->timestamp('due_date')->nullable();
            $table->timestamp('available_from')->default(now());
            $table->integer('time_limit')->nullable();
            $table->integer('attempts_allowed')->default(1);
            $table->timestamp('created_date')->default(now());
            $table->boolean('is_published')->default(false);
            $table->text('instructions')->nullable();
            $table->jsonb('rubric')->nullable();
            $table->timestamps();

            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('set null');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
