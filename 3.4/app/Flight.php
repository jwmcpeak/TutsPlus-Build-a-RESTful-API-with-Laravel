<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function arrivalAirport() {
        return $this->belongsTo('App\Airport', 'arrivalAirport_id');
    }

    public function departureAirport() {
        return $this->belongsTo('App\Airport', 'depatureAirport_id');
    }

    public function passengers() {
        return $this->belongsToMany('App\Customer', 'flight_customer');
    }
}
