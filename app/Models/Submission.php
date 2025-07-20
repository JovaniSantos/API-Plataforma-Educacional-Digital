<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'student_id',
        'submission_date',
        'content',
        'attachments',
        'status',
        'grade',
        'feedback',
        'graded_by',
        'graded_at',
    ];

    protected $casts = [
        'submission_date' => 'datetime',
        'graded_at' => 'datetime',
        'status' => 'string',
        'attachments' => 'array',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function gradedBy()
    {
        return $this->belongsTo(Teacher::class, 'graded_by');
    }

    public function answers()
    {
        return $this->hasMany(SubmissionAnswer::class);
    }
}
