<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => "姑",
            'email' => "test@com",
            'password' => bcrypt('password1'),
            'slack_id' => 'U01C72Q45MJ',
            'role_id' => '2',
            'posse_branch'=>2,
            ],
            ['name' => "DaikinTV",
            'email' => "test2@com",
            'password' => bcrypt('password2'),
            'slack_id' => 'U01H96KU21K',
            'role_id' => '1',
            'posse_branch'=>1,
            ],
            ['name' => "mrp=tmp",
            'email' => "test3@com",
            'password' => bcrypt('password3'),
            'slack_id' => 'U015H9Q2WTZ',
            'role_id' => '1',
            'posse_branch'=>1,
            ],
            ['name' => "たろう",
            'email' => "test4@com",
            'password' => bcrypt('password4'),
            'slack_id' => 'U015H9Q2WTZ',
            'role_id' => '1',
            'posse_branch'=>1,
            ],
        ]);
        DB::table('roles')->insert([
            ['name' => "一般ユーザ"],
            ['name' => "管理者ユーザ"]
        ]);
    }
}
