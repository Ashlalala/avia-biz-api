<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $depDate = $this->faker->dateTimeThisMonth();

        return [
            // 'name' => 'huhio'
            'departure' => $depDate,
            'arrival' => $depDate,
            'from' =>  strtoupper($this->faker->randomLetter().$this->faker->randomLetter().$this->faker->randomLetter()),
            'to' => strtoupper($this->faker->randomLetter().$this->faker->randomLetter().$this->faker->randomLetter()),
        ];
    }
}
