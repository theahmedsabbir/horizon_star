<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('11'),
        ]);

        DB::table('mission_visions')->insert([
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);

        DB::table('abouts')->insert([
            'heading' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'title' => 'Lorem Ipsum is simply dummy text of the printing',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        ]);
    }
}
