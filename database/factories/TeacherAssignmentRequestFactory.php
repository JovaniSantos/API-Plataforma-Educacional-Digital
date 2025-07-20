<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeacherAssignmentRequest;

class TeacherAssignmentRequestFactory extends Factory
{
    protected $model = TeacherAssignmentRequest::class;

    public function definition()
    {
        return [
            'teacher_id' => \App\Models\Teacher::factory(),
            'class_id' => \App\Models\Classroom::factory(), // Ajuste o nome conforme sua convenção
            'request_date' => now(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'requested_by' => \App\Models\User::factory(),
            'admin_notes' => $this->faker->optional()->paragraph,
            'processed_by' => null,
            'processed_date' => $this->faker->optional()->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
