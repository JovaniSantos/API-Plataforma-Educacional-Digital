<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ForumReply;
use App\Models\ForumTopic;
use App\Models\User;

class ForumReplyFactory extends Factory
{
    protected $model = ForumReply::class;

    public function definition()
    {
        return [
            'topic_id' => ForumTopic::factory(),
            'author_id' => User::factory(),
            'content' => $this->faker->paragraph,
            'parent_reply_id' => null,
            'status' => $this->faker->randomElement(['active', 'deleted']),
        ];
    }
}
