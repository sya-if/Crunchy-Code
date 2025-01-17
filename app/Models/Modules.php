<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'link',
        'color',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
