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
                'colour' => "#0F71BD",
            ],
            [
                'type' => 1,
                'name' => "N予備校",
                'colour' => "#1754EF",
            ],
            [
                'type' => 1,
                'name' => "POSSE課題",
                'colour' => "#20BDDE",
            ],
            [
                'type' => 2,
                'name' => "JavaScript",
                'colour' => "#20BDDE",
            ],
            [
                'type' => 2,
                'name' => "CSS",
                'colour' => "#0F71BD",
            ],
            [
                'type' => 2,
                'name' => "PHP",
                'colour' => "#3CCEFE",
            ],
            [
                'type' => 2,
                'name' => "HTML",
                'colour' => "#1754EF",
            ],
            [
                'type' => 2,
                'name' => "Laravel",
                'colour' => "#B29EF3",
            ],
            [
                'type' => 2,
                'name' => "SQL",
                'colour' => "#6D46EC",
            ],
            [
                'type' => 2,
                'name' => "SHELL",
                'colour' => "#4A17EF",
            ],
            [
                'type' => 2,
                'name' => "情報システム基礎知識",
                'colour' => "#3105C0",
            ],
        ]);
    }
}