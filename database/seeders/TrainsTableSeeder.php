<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->streetName();
            $train->arrival_station = $faker->streetName();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->randomNumber(5, false);
            $train->number_of_carriages = $faker->numberBetween(1, 100);
            $train->delay = $faker->boolean();
            $train->suppressed = $faker->boolean();

            $train->save();
        }
    }
}
