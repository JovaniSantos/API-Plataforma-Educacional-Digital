<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserSession;

class UserSessionFactory extends Factory
{
    protected $model = UserSession::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'session_token' => $this->faker->unique()->sha1,
            'ip_address' => $this->faker->ipv4,
            'user_agent' => $this->faker->userAgent,
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
