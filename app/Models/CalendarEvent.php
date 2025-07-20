<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'class_id',
        'subject_id',
        'created_by',
        'event_type',
        'status',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'event_type' => 'string',
        'status' => 'string',
    ];

    public function class()
    {
        return $this->belongsTo(Classe::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function participants()
    {
        return $this->hasMany(EventParticipant::class);
    }
}
