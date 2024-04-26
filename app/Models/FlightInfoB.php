<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightInfoB extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function flight(){
        return $this->belongsTo(Flight::class);
    }
}
