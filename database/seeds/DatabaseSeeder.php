<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Create Divisions
        $path = base_path('database/seeds/blocks.sql');
        $this->command->info("Seeding $path");
        DB::unprepared(file_get_contents($path));
        $this->command->info('Blocks Seeded!');
    }
}
