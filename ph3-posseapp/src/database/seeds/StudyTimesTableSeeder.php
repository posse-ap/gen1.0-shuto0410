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
                'created_at' => "2021-10-31",
            ],
            [
                'user_id' => 1,
                'content_id' => 4,
                'study_time' => 1,
                'created_at' => "2021-10-31",
            ],
            [
                'user_id' => 1,
                'content_id' => 2,
                'study_time' => 1,
                'created_at' => "2021-11-01",
            ],
            [
                'user_id' => 1,
                'content_id' => 5,
                'study_time' => 1,
                'created_at' => "2021-11-02",
            ],
            [
                'user_id' => 1,
                'content_id' => 6,
                'study_time' => 3,
                'created_at' => "2021-11-03",
            ],
            [
                'user_id' => 1,
                'content_id' => 2,
                'study_time' => 1,
                'created_at' => "2021-11-03",
            ],
            [
                'user_id' => 1,
                'content_id' => 3,
                'study_time' => 1,
                'created_at' => "2021-11-02",
            ],
            [
                'user_id' => 1,
                'content_id' => 5,
                'study_time' => 1,
                'created_at' => "2021-11-04",
            ],
            [
                'user_id' => 1,
                'content_id' => 7,
                'study_time' => 1,
                'created_at' => "2021-11-03",
            ],
            [
                'user_id' => 1,
                'content_id' => 8,
                'study_time' => 1,
                'created_at' => "2021-11-01",
            ],
            [
                'user_id' => 1,
                'content_id' => 3,
                'study_time' => 1,
                'created_at' => "2021-11-02",
            ],
        ]);
    }
}
