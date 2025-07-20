<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;
use App\Models\User;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create(['user_type' => 'admin'])->id,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'role' => $this->faker->randomElement(['Administrator', 'Super Administrator', 'Academic Admin']),
            'permissions' => json_encode([
                'users' => $this->faker->boolean,
                'academic' => $this->faker->boolean,
                'reports' => $this->faker->boolean,
                'system' => $this->faker->boolean,
            ]),
            'profile_picture' => $this->faker->imageUrl(),
        ];
    }
}
