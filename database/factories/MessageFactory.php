<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Message;
use App\Models\User;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition()
    {
        return [
            'sender_id' => User::factory(),
            'recipient_id' => User::factory(),
            'content' => $this->faker->paragraph,
            'is_read' => $this->faker->boolean,
        ];
    }
}
