<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescuentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('descuentos')->truncate();

      DB::table('descuentos')->insert([
        'porcentajeDescuento' => 5,
      ]);

      DB::table('descuentos')->insert([
        'porcentajeDescuento' => 10,
      ]);

      DB::table('descuentos')->insert([
        'porcentajeDescuento' => 15,
      ]);
    }
}
