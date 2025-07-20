<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EnrollmentRequest;

class EnrollmentRequestFactory extends Factory
{
    protected $model = EnrollmentRequest::class;

    public function definition()
    {
        return [
            'student_id' => \App\Models\Student::factory(),
            'class_id' => \App\Models\Classroom::factory(), // Ajuste o nome conforme sua convenção
            'request_date' => now(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'reason' => $this->faker->paragraph,
            'admin_notes' => $this->faker->optional()->paragraph,
            'processed_by' => null,
            'processed_date' => $this->faker->optional()->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
