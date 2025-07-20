<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TeacherAssignment;
use App\Models\Teacher;
use App\Models\Class;
use App\Models\Subject;

class TeacherAssignmentFactory extends Factory
{
    protected $model = TeacherAssignment::class;

    public function definition()
    {
        return [
            'teacher_id' => Teacher::factory(),
            'class_id' => Classe::factory(),
            'subject_id' => Subject::factory(),
            'academic_year' => $this->faker->randomElement(['2024-2025', '2025-2026']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
