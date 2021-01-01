<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
Use DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Rytis Klimavicius',
            'email' => 'rytiskli@gmail.com',
            'password' => Hash::make('Sudas123'),
            'user_level' => 0 ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Rytis Normal',
            'email' => 'rytiskli2@gmail.com',
            'password' => Hash::make('Sudas123'),
            'user_level' => 1 ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
