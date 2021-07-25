<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'title_id' => 1,
                'sentence'=> "この漢字はなんて読む？",
                'img_name'=> "1-1.png",
                'commentary'=> "流石にこの漢字は読めると思います。",
            ],
            [
                'title_id' => 1,
                'sentence'=> "この漢字はなんて読む？",
                'img_name'=> "1-2.png",
                'commentary'=> "流石にこの漢字は読めると思います。",
            ],
            [
                'title_id' => 1,
                'sentence'=> "この漢字はなんて読む？",
                'img_name'=> "1-3.png",
                'commentary'=> "流石にこの漢字は読めると思います。",
            ],
            [
                'title_id' => 1,
                'sentence'=> "この漢字はなんて読む？",
                'img_name'=> "1-4.png",
                'commentary'=> "流石にこの漢字は読めると思います。",
            ],
        ]);
    }
}
