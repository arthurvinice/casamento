<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'image',
        'people_id',
    ];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer'
    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
