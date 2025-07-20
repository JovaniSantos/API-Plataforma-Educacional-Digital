<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity;
use App\Models\Teacher;
use App\Models\Class;
use App\Models\Subject;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['exam', 'quiz', 'assignment', 'project']),
            'teacher_id' => Teacher::factory(),
            'class_id' => Classe::factory(),
            'subject_id' => Subject::factory(),
            'total_points' => $this->faker->randomFloat(2, 10, 100),
            'duration_minutes' => $this->faker->numberBetween(30, 180),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'start_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'instructions' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['draft', 'published', 'closed']),
        ];
    }
}
