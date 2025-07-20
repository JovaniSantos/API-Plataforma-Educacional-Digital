<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'email',
        'password_hash',
        'user_type',
        'status',
        'last_login',
    ];

    protected $hidden = [
        'password_hash',
    ];

    protected $casts = [
        'user_type' => 'string',
        'status' => 'string',
        'last_login' => 'datetime',
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function forumTopics()
    {
        return $this->hasMany(ForumTopic::class, 'author_id');
    }

    public function forumReplies()
    {
        return $this->hasMany(ForumReply::class, 'author_id');
    }

    public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class, 'created_by');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }
}
