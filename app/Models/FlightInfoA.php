<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightInfoA extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function flight(){
        return $this->belongsTo(Flight::class);
    }

}
