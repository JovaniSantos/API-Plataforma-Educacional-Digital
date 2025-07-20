<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'password_hash' => Hash::make('password'),
            'user_type' => $this->faker->randomElement(['student', 'teacher', 'admin']),
            'status' => $this->faker->randomElement(['active', 'inactive', 'suspended']),
            'last_login' => $this->faker->dateTimeThisYear(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
