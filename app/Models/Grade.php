<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'class_id',
        'academic_year',
        'quarter_1',
        'quarter_2',
        'quarter_3',
        'final_exam',
        'final_grade',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function class()
    {
        return $this->belongsTo(Classe::class);
    }
}
