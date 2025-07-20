<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ActivityQuestion;
use App\Models\Activity;

class ActivityQuestionFactory extends Factory
{
    protected $model = ActivityQuestion::class;

    public function definition()
    {
        $question_type = $this->faker->randomElement(['multiple_choice', 'true_false', 'short_answer', 'essay']);
        $options = $question_type === 'multiple_choice' ? json_encode([
            $this->faker->sentence,
            $this->faker->sentence,
            $this->faker->sentence,
            $this->faker->sentence,
        ]) : null;
        $correct_answer = $question_type === 'multiple_choice' || $question_type === 'true_false' ? $this->faker->randomElement(['0', '1', 'true', 'false']) : $this->faker->sentence;

        return [
            'activity_id' => Activity::factory(),
            'question_text' => $this->faker->sentence,
            'question_type' => $question_type,
            'points' => $this->faker->randomFloat(2, 1, 20),
            'order_number' => $this->faker->numberBetween(1, 10),
            'options' => $options,
            'correct_answer' => $correct_answer,
        ];
    }
}
