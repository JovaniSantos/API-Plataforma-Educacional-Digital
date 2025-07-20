<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ForumTopic;
use App\Models\ForumCategory;
use App\Models\User;

class ForumTopicFactory extends Factory
{
    protected $model = ForumTopic::class;

    public function definition()
    {
        return [
            'category_id' => ForumCategory::factory(),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'author_id' => User::factory(),
            'status' => $this->faker->randomElement(['open', 'closed', 'pinned']),
            'views_count' => $this->faker->numberBetween(0, 1000),
            'replies_count' => $this->faker->numberBetween(0, 100),
        ];
    }
}
