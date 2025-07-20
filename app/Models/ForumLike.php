<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumLike extends Model
{
    protected $table = 'forum_likes';

    protected $fillable = [
        'user_id',
        'discussion_id',
        'reply_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discussion()
    {
        return $this->belongsTo(ForumDiscussion::class);
    }

    public function reply()
    {
        return $this->belongsTo(ForumReply::class);
    }
}
