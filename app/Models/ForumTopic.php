<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'content',
        'author_id',
        'status',
        'views_count',
        'replies_count',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function category()
    {
        return $this->belongsTo(ForumCategory::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function replies()
    {
        return $this->hasMany(ForumReply::class);
    }
}
