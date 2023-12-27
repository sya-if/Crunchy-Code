<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'subchapternumber',
        'subchaptertitle',
    ];

    public function material(){
        return $this->belongsTo(Material::class, 'modulenumber', 'modulenumber');
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status');
    }


}
