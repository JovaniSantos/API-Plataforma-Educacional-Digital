<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'teacher_number',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'phone',
        'address',
        'hire_date',
        'qualification',
        'specialization',
        'experience_years',
        'salary',
        'profile_picture',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'hire_date' => 'date',
        'gender' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignments()
    {
        return $this->hasMany(TeacherAssignment::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function submissionsGraded()
    {
        return $this->hasMany(Submission::class, 'graded_by');
    }

    public function attendanceRecords()
    {
        return $this->hasMany(Attendance::class, 'recorded_by');
    }
}
