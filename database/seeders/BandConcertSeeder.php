<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concert;
use App\Models\Band;

class BandConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $concerts = Concert::inRandomOrder()->get();
        $bands = Band::inRandomOrder()->get();

        foreach ($concerts as $concert) {
            $randomBands = $bands->random(rand(2, 5));

            foreach ($randomBands as $band) {
                $concert->bands()->attach($band->id);
            }
        }
    }
}
