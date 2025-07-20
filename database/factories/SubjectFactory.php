<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'code' => $this->faker->unique()->numerify('SUB###'),
            'description' => $this->faker->paragraph,
            'credits' => $this->faker->numberBetween(1, 6),
            'category' => $this->faker->randomElement(['Ciências', 'Humanas', 'Exatas']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'course_id' => Course::factory()
        ];
    }
}
