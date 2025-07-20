<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'class_id',
        'subject_id',
        'academic_year',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function class()
    {
        return $this->belongsTo(Classe::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
