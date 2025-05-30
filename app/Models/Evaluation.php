<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    public function note()
    {
        return $this->hasOne(Note::class);
    }
}
