<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Flight::factory(4)->create();
        // \App\Models\FlightInfoA::factory(4)->create();
        // \App\Models\FlightInfoB::factory(4)->create();
        // \App\Models\FlightInfoC::factory(10)->create();

        \App\Models\Flight::factory(200)
        ->hasFlightInfoA(1)
        ->hasFlightInfoB(1)
        ->hasFlightInfoC(1)
        ->create();


    }
}
