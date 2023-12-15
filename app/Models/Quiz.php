<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $primaryKey = 'chapternumber'; // specify the custom primary key column

    protected $fillable = [
        'chapternumber',
        'chaptertitle',
        'description',
    ];

    public function subquizzes(){
        return $this->hasMany(Subquiz::class, 'chapternumber', 'chapternumber');
    }
}
