<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subquiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_text',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer',
    ];

    public function quizzes(){
        return $this->belongsTo(Quiz::class, 'chapternumber', 'chapternumber');
    }
}
