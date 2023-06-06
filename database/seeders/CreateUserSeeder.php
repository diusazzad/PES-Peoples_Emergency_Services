<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'role'=> 0,
               'password'=> bcrypt('11112222'),
            ],
            [
               'name'=>'Editor',
               'email'=>'editor@gmail.com',
               'role'=> 1,
               'password'=> bcrypt('22223333'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'role'=> 2,
               'password'=> bcrypt('33334444'),
            ],

        ];

        foreach ($users as $key => $user)
        {
            User::create($user);
        }
    }
}
