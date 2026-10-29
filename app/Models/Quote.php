<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_code',
        'client_name',
        'client_email',
        'client_phone',
        'project_type',
        'features',
        'design_level',
        'urgency',
        'estimated_min',
        'estimated_max',
        'estimated_weeks',
        'currency',
        'notes',
        'status',
    ];

    protected $casts = [
        'features' => 'array',
        'estimated_min' => 'integer',
        'estimated_max' => 'integer',
        'estimated_weeks' => 'integer',
    ];
}
