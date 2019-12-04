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
        $this->call(GuiaSeeder::class);
        $this->call(DescuentoSeeder::class);
        $this->call(UserSeeder::class);
    }
}
