<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subquiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'subchapternumber',
        'subchaptertitle',
    ];

    public function quizzes(){
        return $this->belongsTo(Quiz::class, 'chapternumber', 'chapternumber');
    }
}
