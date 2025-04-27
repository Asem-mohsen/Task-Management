<?php

namespace App\Services;

use App\Models\Project;
use App\Repositories\ProjectRepository;

class ProjectService
{
    public function __construct(protected ProjectRepository $projectRepository)
    {
    }

    public function list()
    {
        return $this->projectRepository->all();
    }

    public function create(array $data)
    {
        return $this->projectRepository->create($data);
    }

    public function update(array $data, Project $project)
    {
        return $this->projectRepository->update($project, $data);
    }
}
