<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turnero extends Model
{
    use HasFactory;

    public function TurneroFinal()
    {

        return $this->belongsTo('App\Models\Turno', 'turno_id');
    }
}
