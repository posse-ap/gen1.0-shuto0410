<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Shuto',
                'email' => 'test@com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Yoshioka',
                'email' => 'test2@com',
                'password' => bcrypt('password'),
            ],
        ]);
    }
}
