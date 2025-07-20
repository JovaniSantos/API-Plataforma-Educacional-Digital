<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\Class;
use App\Models\Subject;
use App\Models\Teacher;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'class_id' => Classe::factory(),
            'subject_id' => Subject::factory(),
            'attendance_date' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'status' => $this->faker->randomElement(['present', 'absent', 'late', 'excused']),
            'notes' => $this->faker->sentence,
            'recorded_by' => Teacher::factory(),
        ];
    }
}
