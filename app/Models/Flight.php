<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function flightInfoA(){
        return $this->hasOne(FlightInfoA::class);
    }
    public function flightInfoB(){
        return $this->hasOne(FlightInfoB::class);
    }
    public function flightInfoC(){
        return $this->hasOne(FlightInfoC::class);
    }
}
