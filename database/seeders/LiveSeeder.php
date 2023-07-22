<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class liveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('lives')->insert([
                'name'=>'A',
                'artist_id'=>1,
                'date'=>'7/22',
                'place' => '北海道',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
