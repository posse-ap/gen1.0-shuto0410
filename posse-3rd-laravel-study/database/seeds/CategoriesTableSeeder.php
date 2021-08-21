<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'クイズ',
                'link' => 'quiz',
            ],
            [
                'name' => '性格診断',
                'link' => 'assessment',
            ],
        ]);
    }
}
