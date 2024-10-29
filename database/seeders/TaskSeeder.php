<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //mona tasks
        $task1=Task::create([
            'title' => 'task1',
            'description' => 'info of task1',
            'status' => 'pending',
            'due_date' => '2024-11-28',
            'user_id' => '2',
        ]);
        $task2=Task::create([
            'title' => 'task2',
            'description' => 'info of task2',
            'status' => 'pending',
            'due_date' => '2024-11-26',
            'user_id' => '2',
        ]);
        $task3=Task::create([
            'title' => 'task3',
            'description' => 'info of task3',
            'status' => 'pending',
            'due_date' => '2024-11-24',
            'user_id' => '2',
        ]);
        $task4=Task::create([
            'title' => 'task4',
            'description' => 'info of task4',
            'status' => 'pending',
            'due_date' => '2024-11-22',
            'user_id' => '2',
        ]);

        //tuka tasks
        $task5=Task::create([
            'title' => 'task5',
            'description' => 'info of task5',
            'status' => 'pending',
            'due_date' => '2024-11-20',
            'user_id' => '3',
        ]);
        $task6=Task::create([
            'title' => 'task6',
            'description' => 'info of task6',
            'status' => 'pending',
            'due_date' => '2024-11-18',
            'user_id' => '3',
        ]);
        $task7=Task::create([
            'title' => 'task7',
            'description' => 'info of task7',
            'status' => 'pending',
            'due_date' => '2024-11-16',
            'user_id' => '3',
        ]);
        $task8=Task::create([
            'title' => 'task8',
            'description' => 'info of task8',
            'status' => 'pending',
            'due_date' => '2024-11-14',
            'user_id' => '3',
        ]);
    }
}
