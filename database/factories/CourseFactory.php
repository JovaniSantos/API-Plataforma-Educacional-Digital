<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'code' => $this->faker->unique()->regexify('[A-Z]{3,5}'),
            'description' => $this->faker->paragraph,
            'duration_years' => $this->faker->numberBetween(3, 6),
            'total_credits' => $this->faker->numberBetween(180, 360),
            'school_id' => 1, // Ajuste conforme schools existentes
            'department' => $this->faker->word,
            'degree_type' => $this->faker->randomElement(['Licenciatura', 'Mestrado', 'Doutorado']),
            'is_active' => true,
            'created_at' => now(),
        ];
    }
}
