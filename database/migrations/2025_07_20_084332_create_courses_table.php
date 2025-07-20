<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->notNull();
            $table->string('code', 20)->unique()->notNull();
            $table->text('description')->nullable();
            $table->integer('duration_years')->notNull();
            $table->integer('total_credits')->notNull();
            $table->unsignedBigInteger('school_id')->notNull();
            $table->string('department', 100)->nullable();
            $table->string('degree_type', 50)->notNull()->check("degree_type IN ('Licenciatura', 'Mestrado', 'Doutorado')");
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
