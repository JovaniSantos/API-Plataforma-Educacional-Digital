<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Submission;
use App\Models\Activity;
use App\Models\Student;
use App\Models\Teacher;

class SubmissionFactory extends Factory
{
    protected $model = Submission::class;

    public function definition()
    {
        return [
            'activity_id' => Activity::factory(),
            'student_id' => Student::factory(),
            'submission_date' => $this->faker->dateTimeThisYear(),
            'content' => $this->faker->paragraph,
            'attachments' => json_encode([$this->faker->url, $this->faker->url]),
            'status' => $this->faker->randomElement(['submitted', 'graded', 'late']),
            'grade' => $this->faker->randomFloat(2, 0, 100),
            'feedback' => $this->faker->paragraph,
            'graded_by' => Teacher::factory(),
            'graded_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
