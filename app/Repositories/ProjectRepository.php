<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    public function all()
    {
        return Project::all();
    }

    public function create(array $data): Project
    {
        return Project::create($data);
    }

    public function update(Project $project, array $data): Project
    {
        $project->update($data);
        return $project;
    }
}