<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTask;
use App\Models\User;

class UserTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            // Generate random number of tasks for each user
            $taskCount = rand(1, 10);

            for ($i = 0; $i < $taskCount; $i++) {
                UserTask::create([
                    'user_id' => $user->id,
                    'name' => 'Task ' . ($i + 1),
                    'description' => 'Description of Task ' . ($i + 1),
                    'completed' => rand(0, 1),
                ]);
            }
        }
    }
}
