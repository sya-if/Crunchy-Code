<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $primaryKey = 'modulenumber'; // specify the custom primary key column

    protected $fillable = [
        'modulenumber',
        'moduletitle',
        'description',
    ];

    public function submaterials(){
        return $this->hasMany(Submaterial::class, 'modulenumber', 'modulenumber');
    }
}
