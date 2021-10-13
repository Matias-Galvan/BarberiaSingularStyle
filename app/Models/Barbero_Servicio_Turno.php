<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbero_Servicio_Turno extends Model
{
    use HasFactory;

    public function barbero(){
        return $this->belongsTo('App\Models\Barbero','barbero_id');
    }

    public function servicio(){
        return $this->belongsTo('App\Models\Servicio', 'servicio_id');
    }

    public function turno(){
        return $this->belongsTo('App\Models\Turno', 'turno_id');
    }
}
