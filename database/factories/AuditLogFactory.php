<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditLog;
use App\Models\User;

class AuditLogFactory extends Factory
{
    protected $model = AuditLog::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'action' => $this->faker->randomElement(['create', 'update', 'delete', 'view']),
            'entity_type' => $this->faker->randomElement(['student', 'teacher', 'class', 'subject']),
            'entity_id' => $this->faker->numberBetween(1, 100),
            'details' => ['info' => $this->faker->sentence],
        ];
    }
}
