<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoomTypeSeeder::class,
            EventTypeSeeder::class,
            SpaceSeeder::class,
            RoomSeeder::class,
        ]);
    }
}
