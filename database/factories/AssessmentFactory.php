<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assessment;

class AssessmentFactory extends Factory
{
    protected $model = Assessment::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['quiz', 'exam', 'assignment', 'project', 'presentation']),
            'subject_id' => null,
            'class_id' => \App\Models\Classroom::factory(), // Ajuste o nome conforme sua convenção
            'teacher_id' => \App\Models\Teacher::factory(),
            'total_points' => $this->faker->randomFloat(2, 50, 100),
            'weight' => $this->faker->randomFloat(2, 0, 1),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'available_from' => now(),
            'time_limit' => $this->faker->numberBetween(30, 120),
            'attempts_allowed' => 1,
            'created_date' => now(),
            'is_published' => $this->faker->boolean(50),
            'instructions' => $this->faker->paragraph,
            'rubric' => json_encode(['criteria' => ['quality' => 50, 'timeliness' => 50]]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
