<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
