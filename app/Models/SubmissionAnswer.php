<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'submission_id',
        'question_id',
        'answer_text',
        'points_earned',
        'is_correct',
    ];

    protected $casts = [
        'is_correct' => 'boolean',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function question()
    {
        return $this->belongsTo(ActivityQuestion::class);
    }
}
