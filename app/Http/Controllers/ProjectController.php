<?php

namespace App\Http\Controllers;

use App\Http\Requests\Projects\{ StoreProjectRequest, UpdateProjectRequest };
use App\Models\Project;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    public function __construct(protected ProjectService $projectService)
    {
    }

    public function index()
    {
        $projects = $this->projectService->list();
        return view('dashboard.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(StoreProjectRequest $request)
    {
        $this->projectService->create($request->validated());
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $this->projectService->update($request->validated(), $project);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }
    
}
