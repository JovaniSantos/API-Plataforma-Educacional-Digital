<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Notification;
use App\Models\User;

class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'message' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['info', 'warning', 'alert', 'success']),
            'is_read' => $this->faker->boolean,
        ];
    }
}
