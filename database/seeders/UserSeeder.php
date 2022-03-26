<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'huy',
                'password' => bcrypt('123456'),
                'email' => 'huy@gmail.com',
                'fullname' => 'Dương Quang Huy',
                'phone' => '094564654',
                'address' => 'Quận 6 HCM'
            ],
            [
                'username' => 'long',
                'password' => bcrypt('123456'),
                'email' => 'long@gmail.com',
                'fullname' => 'Dương Quang Long',
                'phone' => '094564654',
                'address' => 'Quận 6 HCM'
            ]
        ]);
    }
}
