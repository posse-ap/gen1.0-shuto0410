<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudyTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_times')->insert([
            [
                'user_id' => 1,
                'content_id' => 1,
                'study_time' => 1,
                'created_at' => new DateTime()
            ],
            [
                'user_id' => 1,
                'content_id' => 4,
                'study_time' => 1,
                'created_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'content_id' => 2,
                'study_time' => 1,
                'created_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'content_id' => 5,
                'study_time' => 1,
                'created_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'content_id' => 6,
                'study_time' => 3,
                'created_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'content_id' => 2,
                'study_time' => 1,
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
