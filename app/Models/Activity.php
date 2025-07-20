<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'teacher_id',
        'class_id',
        'subject_id',
        'total_points',
        'duration_minutes',
        'due_date',
        'start_date',
        'instructions',
        'status',
    ];

    protected $casts = [
        'type' => 'string',
        'status' => 'string',
        'due_date' => 'datetime',
        'start_date' => 'datetime',
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

    public function questions()
    {
        return $this->hasMany(ActivityQuestion::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
