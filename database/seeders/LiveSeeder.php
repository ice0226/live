<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

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
                'name'=>'3rd Single発売イベントDay4',
                'artist_id'=>1,
                'date'=>'7/22',
                'place' => 'イオンモール札幌苗穂1階ウエストコート(北海道)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('lives')->insert([
                'name'=>'3rd Single発売イベントDay５',
                'artist_id'=>1,
                'date'=>'7/30',
                'place' => 'セブンパークアリオ柏 屋外 スマイル・パーク(千葉)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
