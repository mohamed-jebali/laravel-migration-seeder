<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsArrivals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
        $newTrain = new Train();
        $newTrain->company = $faker->company;
        $newTrain->departure_station = $faker->city;
        $newTrain->arrival_station = $faker->city;
        $newTrain->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
        $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
        $newTrain->save();
        }
    }

}