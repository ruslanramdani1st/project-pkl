<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nip' => 012301230123,
                'name' => 'Ruslan Ramdani',
                'email' => 'ruslanramdani1st@gmail.com',
                'golongan' => 'BLU',
                'role' => 'Administrator',
                'password' => bcrypt('qweasdzxc123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 32103210321,
                'name' => 'Account Admin',
                'email' => 'admin@gmail.com',
                'golongan' => '3A',
                'role' => 'Administrator',
                'password' => bcrypt('admin1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 123412341234,
                'name' => 'Account Pertama',
                'email' => 'user1@gmail.com',
                'golongan' => '4A',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 432143214321,
                'name' => 'Account Kedua',
                'email' => 'user2@gmail.com',
                'golongan' => '3B',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 789078907890,
                'name' => 'Account Ketiga',
                'email' => 'user3@gmail.com',
                'golongan' => '4B',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 198709870987,
                'name' => 'Account Keempat',
                'email' => 'user4@gmail.com',
                'golongan' => '3C',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('users')->insert($data);
    }
}
