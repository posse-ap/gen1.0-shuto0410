<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([
            [
                'question_id' => 1,
                'choice'=> 'たかなわ',
                'true_false'=> "true",
            ],
            [
                'question_id' => 1,
                'choice'=> 'たかわ',
                'true_false'=> "false",
            ],
            [
                'question_id' => 1,
                'choice'=> 'こうわ',
                'true_false'=> "false",
            ],
            [
                'question_id' => 2,
                'choice'=> 'かめいど',
                'true_false'=> "true",
            ],
            [
                'question_id' => 2,
                'choice'=> 'かめど',
                'true_false'=> "false",
            ],
            [
                'question_id' => 2,
                'choice'=> 'かめと',
                'true_false'=> "false",
            ],
            [
                'question_id' => 3,
                'choice'=> 'こうじまち',
                'true_false'=> "true",
            ],
            [
                'question_id' => 3,
                'choice'=> 'こうじちょう',
                'true_false'=> "false",
            ],
            [
                'question_id' => 3,
                'choice'=> 'めんまち',
                'true_false'=> "false",
            ],
            [
                'question_id' => 4,
                'choice'=> 'おなりもん',
                'true_false'=> "true",
            ],
            [
                'question_id' => 4,
                'choice'=> 'ごせいもん',
                'true_false'=> "false",
            ],
            [
                'question_id' => 4,
                'choice'=> 'ごじょうもん',
                'true_false'=> "false",
            ],
        ]);
    }
}
