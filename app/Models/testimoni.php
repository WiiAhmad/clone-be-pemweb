<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'testimoni',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
