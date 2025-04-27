<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tasks\{ StoreTaskRequest, UpdateTaskRequest };
use App\Models\Task;
use App\Services\{ProjectService, TaskService};
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(protected TaskService $taskService, protected ProjectService $projectService)
    {
    }

    public function index(Request $request)
    {
        $projectId = $request->query('project_id');
        $tasks = $this->taskService->list($projectId);
        $projects = $this->projectService->list();
        return view('dashboard.tasks.index', compact('tasks', 'projects', 'projectId'));
    }

    public function create()
    {
        $projects = $this->projectService->list();
        return view('dashboard.tasks.create', compact('projects'));
    }

    public function store(StoreTaskRequest $request)
    {
        $this->taskService->create($request->validated());
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        $projects = $this->projectService->list();
        return view('dashboard.tasks.edit', compact('task', 'projects'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $this->taskService->update($request->validated(), $task);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $this->taskService->delete($task);
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

    public function reorder(Request $request)
    {
        $this->taskService->reorder($request->input('task_ids', []));
        return response()->json(['success' => true]);
    }
}
