<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EventParticipant;
use App\Models\CalendarEvent;
use App\Models\User;

class EventParticipantFactory extends Factory
{
    protected $model = EventParticipant::class;

    public function definition()
    {
        return [
            'event_id' => CalendarEvent::factory(),
            'user_id' => User::factory(),
            'status' => $this->faker->randomElement(['confirmed', 'pending', 'declined']),
        ];
    }
}
