<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{   
    protected $fillable = ['user_id', 'module', 'submodule', 'status'];

    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function submaterials() {
        return $this->belongsTo(Submaterial::class);
    }

    
}