<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

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
                'name' =>'ice',
                'email' => 'a@a',
                'password' => Hash::make('12345678'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
