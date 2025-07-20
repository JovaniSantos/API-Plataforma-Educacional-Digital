<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ForumCategory;

class ForumCategoryFactory extends Factory
{
    protected $model = ForumCategory::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
