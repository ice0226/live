<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;

class artistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
                'id'=>1,
                'name' => 'THE SUPER FRUIT',
         ]);
        
        DB::table('artists')->insert([
                'id' =>2,
                'name'=>'世が世なら!!!',
         ]);
    }
}
