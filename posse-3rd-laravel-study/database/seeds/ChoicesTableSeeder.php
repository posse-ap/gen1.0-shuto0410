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
            [
                'question_id' => 5,
                'choice'=> 'とどろき',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 5,
                'choice'=> 'たたりき',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 5,
                'choice'=> 'たたら',
                'true_false'=> "false",
            ],
            [
                'question_id' => 6,
                'choice'=> 'しゃくじい',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 6,
                'choice'=> 'いじい',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 6,
                'choice'=> 'せきこうい',
                'true_false'=> "false",
            ],
            [
                'question_id' => 7,
                'choice'=> 'ぞうしき',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 7,
                'choice'=> 'ざっしょく',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 7,
                'choice'=> 'ざっしき',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 8,
                'choice'=> 'おかちまち',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 8,
                'choice'=> 'ごしろちょう',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 8,
                'choice'=> 'みとちょう',
                'true_false'=> "false",
            ],
            [
                'question_id' => 9,
                'choice'=> 'ししぼね',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 9,
                'choice'=> 'ろっこつ',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 9,
                'choice'=> 'しこね',
                'true_false'=> "false",
            ],
            [
                'question_id' => 10,
                'choice'=> 'こぐれ',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 10,
                'choice'=> 'こばく',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 10,
                'choice'=> 'こしゃく',
                'true_false'=> "false",
            ],
            [
                'question_id' => 11,
                'choice'=> 'むかいなだ',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 11,
                'choice'=> 'むこうひら',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 11,
                'choice'=> 'むきひら',
                'true_false'=> "false",
            ],
            [
                'question_id' => 12,
                'choice'=> 'みつぎ',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 12,
                'choice'=> 'みよし',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 12,
                'choice'=> 'おしらべ',
                'true_false'=> "false",
            ],
            [
                'question_id' => 13,
                'choice'=> 'かなやま',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 13,
                'choice'=> 'ぎんざん',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 13,
                'choice'=> 'きやま',
                'true_false'=> "false",
            ],
            [
                'question_id' => 14,
                'choice'=> 'とよひ',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 14,
                'choice'=> 'としか',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 14,
                'choice'=> 'とよか',
                'true_false'=> "false",
            ],
            [
                'question_id' => 15,
                'choice'=> 'いしぐろ',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 15,
                'choice'=> 'しゃくぜ',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 15,
                'choice'=> 'いしあぜ',
                'true_false'=> "false",
            ],
            [
                'question_id' => 16,
                'choice'=> 'みよし',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 16,
                'choice'=> 'みつぎ',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 16,
                'choice'=> 'みかた',
                'true_false'=> "false",
            ],
            [
                'question_id' => 17,
                'choice'=> 'うずい',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 17,
                'choice'=> 'くもおり',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 17,
                'choice'=> 'もみち',
                'true_false'=> "false",
            ],
            [
                'question_id' => 18,
                'choice'=> 'すもも',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 18,
                'choice'=> 'あんず',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 18,
                'choice'=> 'でこぽん',
                'true_false'=> "false",
            ],
            [
                'question_id' => 19,
                'choice'=> 'おおうちごとうげ',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 19,
                'choice'=> 'おおちごえとうげ',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 19,
                'choice'=> 'おおちごとうげ',
                'true_false'=> "false",
            ],
            [
                'question_id' => 20,
                'choice'=> 'よおろほよばら',
                'true_false'=> "true",
            ],           
            [
                'question_id' => 20,
                'choice'=> 'ていぼよはら',
                'true_false'=> "false",
            ],            
            [
                'question_id' => 20,
                'choice'=> 'てっぽよばら',
                'true_false'=> "false",
            ],
            
        ]);
    }
}
