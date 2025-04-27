<?php

namespace App\Services;

use App\Models\Task;
use App\Repositories\TaskRepository;

class TaskService
{
    public function __construct(protected TaskRepository $taskRepository)
    {
    }

    public function list(?int $projectId = null)
    {
        return $this->taskRepository->all($projectId);
    }

    public function create(array $data)
    {
        $data['priority'] = $this->taskRepository->getNextPriority($data['project_id'] ?? null);
        return $this->taskRepository->create($data);
    }

    public function update(array $data, Task $task)
    {
        return $this->taskRepository->update($task, $data);
    }

    public function delete(Task $task)
    {
        return $this->taskRepository->delete($task);
    }

    public function reorder(array $taskIds)
    {
        return $this->taskRepository->reorder($taskIds);
    }
}
