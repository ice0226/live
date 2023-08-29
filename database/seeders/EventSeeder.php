<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('events')->insert([
                'user_id'=>1,
                // 'live_id'=>1,
                // 'artist_id'=>1,
                'start_date'=> '命名はデータを基準に考える',
                'end_date'=> '命名はデータを基準に考える',
                'color'=>'red',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
