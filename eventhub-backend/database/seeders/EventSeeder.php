<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Event::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'location' => $faker->city,
                'date' => $faker->date(),
                'time' => $faker->time('H:i'),
            ]);
        }
    }
}
