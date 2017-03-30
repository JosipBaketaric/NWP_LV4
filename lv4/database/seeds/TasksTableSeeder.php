<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 1,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 1,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 1,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 1,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 1,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 2,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 2,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 2,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 2,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 2,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 3,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 3,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 3,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 3,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 3,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 4,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 4,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 4,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 4,
        ]);
        DB::table('tasks')->insert([
            'name' => str_random(10),
            'name_english' => str_random(10),
            'description' => str_random(50),
            'type' => 'Stručni',
            'creator_id' => 4,
        ]);


    }
}
