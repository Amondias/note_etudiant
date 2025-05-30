<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'titre',
        'date',
        'type'
    ];
    
    public function note()
    {
        return $this->hasMany(Note::class);
    }
}
