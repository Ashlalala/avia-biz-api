<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightInfoBFactory extends Factory
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
            'baggage' => 'some baggage',
            'cargo' => 'some cargo',
            'eic' => 'some eic',
            'mail' => 'some mail',
            'total' => 'The Total',
        ];
    }
}
