<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherAssignmentRequest extends Model
{
    protected $table = 'teacher_assignment_requests';

    protected $fillable = [
        'teacher_id',
        'class_id',
        'request_date',
        'status',
        'requested_by',
        'admin_notes',
        'processed_by',
        'processed_date',
    ];

    protected $casts = [
        'request_date' => 'date',
        'processed_date' => 'date',
        'status' => 'string',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class); // Ajuste o nome conforme sua convenção
    }

    public function requestedBy()
    {
        return $this->belongsTo(User::class, 'requested_by');
    }

    public function processedBy()
    {
        return $this->belongsTo(User::class, 'processed_by');
    }
}
