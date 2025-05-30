<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'classe',
        'date_naissance',
        'lieu_naissance'
    ];

    public function note()
    {
        return $this->hasMany(Note::class);
    }
}
