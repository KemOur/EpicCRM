<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'lastname' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Commercials',
            'lastname' => 'COMMERCIAL',
            'email' => 'commercial@gmail.com',
            'password' => bcrypt('pass@commercial'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Managers',
            'lastname' => 'MANAGER',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('pass@manager'),
        ]);
    }
}
