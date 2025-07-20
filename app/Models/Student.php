<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_number',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'phone',
        'address',
        'enrollment_date',
        'parent_name',
        'parent_phone',
        'parent_email',
        'emergency_contact',
        'emergency_phone',
        'profile_picture',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'enrollment_date' => 'date',
        'gender' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
