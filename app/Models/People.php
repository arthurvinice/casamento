<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Gift;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

    public function gifts()
    {
        return $this->hasMany(Gift::class);
    }
}
