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
        //Admin
        DB::table('users')->insert([
            'name' => 'Josip',
            'email' => 'baketaricjosip'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 3,
        ]);

        //Teachers
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '1'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 2,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '2'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 2,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '3'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 2,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '4'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 2,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '5'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 2,
        ]);

        //Students
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '6'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '7'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '8'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '9'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '10'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '11'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '12'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '13'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '14'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '15'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => '16'.'@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);

    }
}
