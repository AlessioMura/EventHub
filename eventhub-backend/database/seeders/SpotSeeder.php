<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Spot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpotSeeder extends Seeder
{
    public function run(): void
    {
        Event::all()->each(function ($event) {
            for ($i = 0; $i < 10; $i++) {
                Spot::create([
                    'event_id' => $event->id,
                    'is_reserved' => fake()->boolean(30), // 30% dei posti già riservati
                ]);
            }
        });
    }
}
