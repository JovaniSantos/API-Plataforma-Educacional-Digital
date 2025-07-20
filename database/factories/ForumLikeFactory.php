<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ForumLike;

class ForumLikeFactory extends Factory
{
    protected $model = ForumLike::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'discussion_id' => \App\Models\ForumDiscussion::factory(),
            'reply_id' => null,
            'created_at' => now(),
        ];
    }
}
