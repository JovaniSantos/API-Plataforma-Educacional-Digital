<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'grade_level',
        'section',
        'school_id',
        'academic_year',
        'max_students',
        'status',
        'semester',         // Novo campo
        'is_mandatory',     // Novo campo
        'prerequisites',    // Novo campo
    ];

    protected $casts = [
        'grade_level' => 'string',
        'status' => 'string',
        'is_mandatory' => 'boolean',      // Cast correto para booleano
        'prerequisites' => 'array',       // Para manipular JSON como array
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

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
