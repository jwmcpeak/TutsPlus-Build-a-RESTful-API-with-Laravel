<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    
    public function arrivingFlights() {
        return $this->hasMany('App\Flight', 'arrivalAirport_id');
    }

    public function departingFlights() {
        return $this->hasMany('App\Flight', 'depatureAirport_id');
    }
}
