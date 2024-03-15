<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'arrival_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'train_code' => $faker->unique()->ean8,
                'coach_count' => $faker->numberBetween($min = 1, $max = 10),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
            ]);
        }
    }
}
