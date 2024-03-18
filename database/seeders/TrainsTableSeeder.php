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
                // 'departure_time' => $faker->time('H:i:s', 'now'),
                'departure_time' => $faker->time(max: 'now', format: 'H:i:s'),
                'arrival_time' => $faker->time('H:i:s', 'now'),
                'train_code' => $faker->unique()->ean8,
                'coach_count' => $faker->numberBetween(int1: 1, int2: 10),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
            ]);
        }
    }
}
