<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'class_id',
        'subject_id',
        'attendance_date',
        'status',
        'notes',
        'recorded_by',
    ];

    protected $casts = [
        'attendance_date' => 'date',
        'status' => 'string',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function class()
    {
        return $this->belongsTo(Classe::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function recordedBy()
    {
        return $this->belongsTo(Teacher::class, 'recorded_by');
    }
}
