<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightInfoCFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'flight_id' => Flight::factory(),
            'in_tanks' => 'In Tanks',
            'uplifted' => 'In uplifted',
            'departure' => 'The departure',
            'utilised' => 'The utilised',
            'arrival' => 'The arrival',
            'defuel' => 'The defuel',
        ];
    }
}
