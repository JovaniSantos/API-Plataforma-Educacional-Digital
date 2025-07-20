<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $table = 'assessments';

    protected $fillable = [
        'title',
        'description',
        'type',
        'subject_id',
        'class_id',
        'teacher_id',
        'total_points',
        'weight',
        'due_date',
        'available_from',
        'time_limit',
        'attempts_allowed',
        'created_date',
        'is_published',
        'instructions',
        'rubric',
    ];

    protected $casts = [
        'total_points' => 'decimal:2',
        'weight' => 'decimal:2',
        'due_date' => 'datetime',
        'available_from' => 'datetime',
        'created_date' => 'datetime',
        'is_published' => 'boolean',
        'rubric' => 'json',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class); // Ajuste o nome conforme sua convenção
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
