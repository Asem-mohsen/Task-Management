@extends('layout.master')

@section('title','Edit task')
@section('page-title', 'Edit task')

@section('main-breadcrumb', 'Tasks')
@section('main-breadcrumb-link', route('tasks.index'))

@section('sub-breadcrumb','Edit task')


@section('content')

    <div class="col-md-12 mb-md-5 mb-xl-10">
        <form action="{{ route('tasks.update',$task) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="card">
                <div class="card-body row">
                    <div class="mb-10 col-md-6">
                        <label for="name" class="required form-label">Name</label>
                        <input type="text" value="{{ old('name') ?? $task->name }}" name="name" class="form-control form-control-solid required" required/>
                    </div>

                    <div class="mb-10 col-md-6">
                        <label for="project_id" class="required form-label">Project</label>
                        <select class="form-select form-select-solid" name="project_id" id="project_id" data-control="select2" data-placeholder="Select a value" data-kt-repeater="select2" data-allow-clear="true">
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? 'selected' : '' }}>{{ $project->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-dark">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
