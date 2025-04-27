<?php

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class TaskRepository
{
    public function all(?int $projectId = null): Collection
    {
        $query = Task::query();
        
        if ($projectId) {
            $query->where('project_id', $projectId);
        }
        
        return $query->orderBy('priority', 'asc')->get();
    }

    public function create(array $data): Task
    {
        return Task::create($data);
    }

    public function update(Task $task, array $data): Task
    {
        $task->update($data);
        return $task;
    }

    public function delete(Task $task): void
    {
        $task->delete();
    }

    public function reorder(array $taskIds): bool
    {
        return DB::transaction(function () use ($taskIds) {

            $tasks = collect($taskIds)->map(function ($taskId) {
                return Task::find($taskId);
            })->filter();
            
            $tasks->each(function ($task, $index) {
                $newPriority = $index + 1;
                $task->priority = $newPriority;
                $task->save();
            });
            
            return true;
        });
    }

    public function getNextPriority(?int $projectId = null): int
    {
        $query = Task::query();
        
        if ($projectId) {
            $query->where('project_id', $projectId);
        }
        
        return $query->max('priority') + 1;
    }
}