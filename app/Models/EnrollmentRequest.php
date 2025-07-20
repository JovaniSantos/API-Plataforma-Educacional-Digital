<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollmentRequest extends Model
{
    protected $table = 'enrollment_requests';

    protected $fillable = [
        'student_id',
        'class_id',
        'request_date',
        'status',
        'reason',
        'admin_notes',
        'processed_by',
        'processed_date',
    ];

    protected $casts = [
        'request_date' => 'date',
        'processed_date' => 'date',
        'status' => 'string',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class); // Ajuste o nome conforme sua convenção
    }

    public function processedBy()
    {
        return $this->belongsTo(User::class, 'processed_by');
    }
}
