<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CalendarEvent;
use App\Models\Class;
use App\Models\Subject;
use App\Models\User;

class CalendarEventFactory extends Factory
{
    protected $model = CalendarEvent::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'start_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_time' => $this->faker->dateTimeBetween('+1 hour', '+2 hours'),
            'class_id' => Classe::factory(),
            'subject_id' => Subject::factory(),
            'created_by' => User::factory(),
            'event_type' => $this->faker->randomElement(['exam', 'meeting', 'holiday', 'other']),
            'status' => $this->faker->randomElement(['active', 'cancelled']),
        ];
    }
}
