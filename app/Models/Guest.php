<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'is_attending',
    ];

    protected $casts = [
        'is_attending' => 'boolean'
    ];
}
