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
            $newTrain->arrival_time = $faker->dateTimeThisYear($max = 'now',$timezone = null);
            $newTrain->departure_time = $faker->dateTimeThisYear($max = 'now',$timezone = null);
            $newTrain->code_train = $faker->numberBetween(1,100);
            $newTrain->train_number_carriage = $faker->numberBetween(1,20);
            $newTrain->in_time = $faker->boolean(true,false);
            $newTrain->cancelled = $faker->boolean(true,false);
            $newTrain->save();
        }
    }
}
