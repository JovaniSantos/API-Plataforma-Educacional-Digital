<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Class;

class GradeFactory extends Factory
{
    protected $model = Grade::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'subject_id' => Subject::factory(),
            'class_id' => Classe::factory(),
            'academic_year' => $this->faker->randomElement(['2024-2025', '2025-2026']),
            'quarter_1' => $this->faker->randomFloat(2, 0, 20),
            'quarter_2' => $this->faker->randomFloat(2, 0, 20),
            'quarter_3' => $this->faker->randomFloat(2, 0, 20),
            'final_exam' => $this->faker->randomFloat(2, 0, 20),
            'final_grade' => $this->faker->randomFloat(2, 0, 20),
            'status' => $this->faker->randomElement(['passed', 'failed', 'incomplete']),
        ];
    }
}
