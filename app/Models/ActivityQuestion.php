<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'question_text',
        'question_type',
        'points',
        'order_number',
        'options',
        'correct_answer',
    ];

    protected $casts = [
        'question_type' => 'string',
        'options' => 'array',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function submissionAnswers()
    {
        return $this->hasMany(SubmissionAnswer::class);
    }
}
