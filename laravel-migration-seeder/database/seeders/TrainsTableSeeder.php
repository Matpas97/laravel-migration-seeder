<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generetor as Faker;
use App\models\train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i=0; $i<100; $i++) {

            $train = new Train();
            $train->company = $faker->name();
            $train->departure_station = $faker->time();
            $train->arrival_station = $faker->time();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->departure_date = $faker->date();
            $train->arrival_date = $faker->date();
            $randomDate = $faker->date();
            $train->code_train = $faker->randomDigit();
            $train->number_vagon = $faker->numberBetween(0, 100);
            $train->in_time = $faker->time();
            $train-> cancelled = $faker->catchPhrase();
            $train->save();

        }
    }
}
