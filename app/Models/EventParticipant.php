<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function event()
    {
        return $this->belongsTo(CalendarEvent::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
