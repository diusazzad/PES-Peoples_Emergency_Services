<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11112222'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('22223333'),
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('33334444'),
        ]);
    }
}
