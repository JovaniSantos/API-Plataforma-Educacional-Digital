<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'class_id',
        'enrollment_date',
        'status',
        'academic_year',
    ];

    protected $casts = [
        'enrollment_date' => 'date',
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
}
