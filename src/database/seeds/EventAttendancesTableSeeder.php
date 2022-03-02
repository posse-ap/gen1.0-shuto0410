<?php

use Illuminate\Database\Seeder;

class EventAttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_attendances')->insert([
            ['event_id' => 1,
            'user_id' => 1,
            'status_id' => 1,
            ],
            ['event_id' => 1,
            'user_id' => 2,
            'status_id' => 2,
            ],
            ['event_id' => 1,
            'user_id' => 3,
            'status_id' => 2,
            ],
            ['event_id' => 2,
            'user_id' => 1,
            'status_id' => 1,
            ],
            ['event_id' => 2,
            'user_id' => 3,
            'status_id' => 1,
            ],
        ]);
    }
}
