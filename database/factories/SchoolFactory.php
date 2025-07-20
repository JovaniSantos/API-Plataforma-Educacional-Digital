<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\School;

class SchoolFactory extends Factory
{
    protected $model = School::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'code' => $this->faker->unique()->numerify('SCH###'),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'principal_name' => $this->faker->name,
            'established_date' => $this->faker->dateTimeBetween('-50 years', 'now')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
