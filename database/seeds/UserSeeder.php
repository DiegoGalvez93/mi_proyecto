<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'DiegoG',
        'email' => 'diego.g.cel@gmail.com',
        'email_verified_at' => Carbon::now(),
        'password' => '12345',
        #'rememberToken' => str_random(10),
        #'created_at' => Carbon::now(),
      ]);

      DB::table('users')->insert([
        'name' => 'prueba',
        'email' => 'p@gmail.com',
        'email_verified_at' => Carbon::now(),
        'password' => '1234',
        #'rememberToken' => str_random(10),
        #'created_at' => Carbon::now(),
      ]);
    }
}
