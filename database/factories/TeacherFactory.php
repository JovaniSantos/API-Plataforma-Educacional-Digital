<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;
use App\Models\User;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create(['user_type' => 'teacher'])->id,
            'teacher_number' => $this->faker->unique()->numerify('PROF###'),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->dateTimeBetween('-60 years', '-25 years')->format('Y-m-d'),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'hire_date' => $this->faker->dateTimeBetween('-20 years', 'now')->format('Y-m-d'),
            'qualification' => $this->faker->randomElement(['Licenciatura', 'Mestrado', 'Doutorado']),
            'specialization' => $this->faker->randomElement(['Matemática', 'Informática', 'História', 'Medicina']),
            'experience_years' => $this->faker->numberBetween(0, 20),
            'salary' => $this->faker->randomFloat(2, 100000, 200000),
            'profile_picture' => $this->faker->imageUrl(),
        ];
    }
}
