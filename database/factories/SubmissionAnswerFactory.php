<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubmissionAnswer;
use App\Models\Submission;
use App\Models\ActivityQuestion;

class SubmissionAnswerFactory extends Factory
{
    protected $model = SubmissionAnswer::class;

    public function definition()
    {
        return [
            'submission_id' => Submission::factory(),
            'question_id' => ActivityQuestion::factory(),
            'answer_text' => $this->faker->sentence,
            'points_earned' => $this->faker->randomFloat(2, 0, 20),
            'is_correct' => $this->faker->boolean,
        ];
    }
}
