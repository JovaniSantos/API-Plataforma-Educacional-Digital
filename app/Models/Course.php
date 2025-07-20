<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name',
        'code',
        'description',
        'duration_years',
        'total_credits',
        'school_id',
        'department',
        'degree_type',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'duration_years' => 'integer',
        'total_credits' => 'integer',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
