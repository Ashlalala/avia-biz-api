<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightInfoAFactory extends Factory
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
            'std' => $this->faker->dateTimeThisMonth(),
            'ptd' => $this->faker->dateTimeThisMonth(),
            'etd' => $this->faker->dateTimeThisMonth(),
            'atd' => $this->faker->dateTimeThisMonth(),
            'sta' => $this->faker->dateTimeThisMonth(),
            'pta' => $this->faker->dateTimeThisMonth(),
            'eta' => $this->faker->dateTimeThisMonth(),
            'ata' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
