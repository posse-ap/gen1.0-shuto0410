<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                'title' => '東京の難読漢字',
            ],
            [
                'title' => '広島の難読漢字',
            ]
        ]);
    }
}
