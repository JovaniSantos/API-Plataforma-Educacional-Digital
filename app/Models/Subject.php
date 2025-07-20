<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'code',
        'description',
        'education_level',
        'grade_level',
        'semester',
        'is_mandatory',
        'prerequisites',
        'credits',
        'category',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function teacherAssignments()
    {
        return $this->hasMany(TeacherAssignment::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class);
    }
}
