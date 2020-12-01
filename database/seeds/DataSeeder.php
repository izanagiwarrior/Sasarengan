<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => "M. Faiz Triputra",
            'email' => "m.faiztpaduhai@gmail.com",
            'password' => "akujomblo123",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
