<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function note()
    {
        return $this->hasMany(Note::class);
    }
}
