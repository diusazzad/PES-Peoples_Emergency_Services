<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FitnessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fitnesses')->insert([
            [
                'name' => 'Jogging',
                'description' => 'Running at a steady pace',
                'duration' => 30,
                'calories_burned' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yoga',
                'description' => 'Gentle stretching and relaxation',
                'duration' => 60,
                'calories_burned' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Weightlifting',
                'description' => 'Strength training with weights',
                'duration' => 45,
                'calories_burned' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
