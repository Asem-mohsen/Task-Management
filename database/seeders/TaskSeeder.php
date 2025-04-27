<?php

namespace Database\Seeders;

use App\Models\{ Project, Task};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $projects = Project::all();
        $tasks = [];

        foreach ($projects as $project) {
            for ($i = 1; $i <= 5; $i++) {
                $tasks[] = [
                    'name' => $project->name . " Task " . $i,
                    'priority' => $i,
                    'project_id' => $project->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        Task::insert($tasks);
    }
}
