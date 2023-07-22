<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newFlight = new Flight();
            $newFlight->aircraft_name = $faker->company;
            $newFlight->departure_airport = $faker->city;
            $newFlight->arrival_airport = $faker->city;
            $newFlight->terminal = $faker->numberBetween(10,50);
            $newFlight->delay = $faker->boolean(true,false);
            $newFlight->check_in = $faker->boolean(true,false);
            $newFlight->flight_number = $faker->numberBetween(10,100);
            $newFlight->save();
        }
    }
}
