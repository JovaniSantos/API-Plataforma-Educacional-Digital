<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'address',
        'phone',
        'type',
        'description',
        'email',
        'principal_name',
        'established_date',
        'status',
    ];

    protected $casts = [
        'established_date' => 'date',
        'status' => 'string',
    ];

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
}
