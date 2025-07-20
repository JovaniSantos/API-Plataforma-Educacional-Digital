<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Classe;

class EnrollmentFactory extends Factory
{
    protected $model = Enrollment::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'class_id' => Classe::factory(),
            'enrollment_date' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'status' => $this->faker->randomElement(['active', 'transferred', 'graduated', 'dropped']),
            'academic_year' => $this->faker->randomElement(['2024-2025', '2025-2026']),
        ];
    }
}
