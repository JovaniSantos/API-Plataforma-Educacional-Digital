<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'file_type',
        'subject_id',
        'class_id',
        'uploaded_by',
        'status',
    ];

    protected $casts = [
        'file_type' => 'string',
        'status' => 'string',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function class()
    {
        return $this->belongsTo(Classe::class);
    }

    public function uploadedBy()
    {
        return $this->belongsTo(Teacher::class, 'uploaded_by');
    }
}
