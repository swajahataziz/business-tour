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
        // $this->call(UsersTableSeeder::class);
        DB::unprepared(File::get(base_path() . '/database/seeds/ref_airlines.sql'));
        DB::unprepared(File::get(base_path() . '/database/seeds/ref_airports.sql'));
        DB::unprepared(File::get(base_path() . '/database/seeds/ref_air_cities.sql'));
        DB::unprepared(File::get(base_path() . '/database/seeds/ref_equipments.sql'));
    }
}
