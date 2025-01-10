<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BandSeeder;
use Database\Seeders\ConcertSeeder;
use Database\Seeders\BandConcertSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            BandSeeder::class,
            ConcertSeeder::class,
            BandConcertSeeder::class
        ]);
    }
}
