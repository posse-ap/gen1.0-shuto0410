<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            [
                'type' => 1,
                'name' => "ドットインストール",
            ],
            [
                'type' => 1,
                'name' => "N予備校",
            ],
            [
                'type' => 1,
                'name' => "POSSE課題",
            ],
            [
                'type' => 2,
                'name' => "JavaScript",
            ],
            [
                'type' => 2,
                'name' => "CSS",
            ],
            [
                'type' => 2,
                'name' => "PHP",
            ],
            [
                'type' => 2,
                'name' => "HTML",
            ],
            [
                'type' => 2,
                'name' => "",
            ],
            [
                'type' => 2,
                'name' => "Laravel",
            ],
            [
                'type' => 2,
                'name' => "SQL",
            ],
            [
                'type' => 2,
                'name' => "SHELL",
            ],
            [
                'type' => 2,
                'name' => "情報システム基礎知識",
            ],
        ]);
    }
}