<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\User;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create(['user_type' => 'student'])->id,
            'student_number' => $this->faker->unique()->numerify('EST###'),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->dateTimeBetween('-25 years', '-15 years')->format('Y-m-d'),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'enrollment_date' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'parent_name' => $this->faker->name,
            'parent_phone' => $this->faker->phoneNumber,
            'parent_email' => $this->faker->email,
            'emergency_contact' => $this->faker->name,
            'emergency_phone' => $this->faker->phoneNumber,
            'profile_picture' => $this->faker->imageUrl(),
        ];
    }
}
