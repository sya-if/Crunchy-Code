<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    
    protected $fillable = ['category', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts() {
        return $this->hasMany(ForumPost::class);
    }

    public function admin() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
