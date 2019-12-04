<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guias')->insert([
          'nombreGuia' => 'Diego',
          'noRecorridos' => 2,
        ]);

        DB::table('guias')->insert([
          'nombreGuia' => 'Jorge',
          'noRecorridos' => 3,
        ]);

        DB::table('guias')->insert([
          'nombreGuia' => 'Gálvez',
          'noRecorridos' => 4,
        ]);
    }
}
