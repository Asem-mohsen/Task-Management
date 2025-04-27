@extends('layout.master')

@section('title','Tasks')
@section('page-title', 'Tasks')

@section('main-breadcrumb', 'Tasks')
@section('main-breadcrumb-link', route('tasks.index'))

@section('sub-breadcrumb', 'Tasks')

@section('page-styles')
    <style>
        .handle {
            cursor: move;
        }
        .ui-sortable-helper {
            background: #f8f9fa;
            display: table;
        }
    </style>
@endsection

@section('content')

    <div class="col-md-12 mb-md-5 mb-xl-10">
        <div class="card">

            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <form action="{{ route('tasks.index') }}" method="GET" class="d-flex gap-3">
                            <select name="project_id" class="form-select form-select-solid" onchange="this.form.submit()">
                                <option value="">All Projects</option>
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}" {{ $projectId == $project->id ? 'selected' : '' }}>
                                        {{ $project->name }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
                
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-table-toolbar="base">
                        <a href="{{ route('tasks.create') }}" class="btn btn-primary"><i class="ki-duotone ki-plus fs-2"></i>Add Task</a>
                    </div>
                </div>
            </div>

            <div class="card-body pt-0">
                <table class="table table-striped table-row-dashed align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                    <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 table-head">
                            <th>Priority</th>
                            <th>Name</th>
                            <th>Project</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600" id="sortable">
                        @foreach ($tasks as $task)
                            <tr data-task-id="{{ $task->id }}">
                                <td class="handle">
                                    <i class="ki-duotone ki-arrow-up-down fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->project->name }}</td>
                                <td class="d-flex gap-2">
                                    <x-table-icon-link 
                                        :route="route('tasks.edit',$task)" 
                                        colorClass="primary"
                                        title="Edit"
                                        iconClasses="fa-solid fa-arrow-right"
                                    />

                                    <form action="{{ route('tasks.destroy',$task) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-icon-button
                                            colorClass="danger"
                                            title="Delete"
                                            iconClasses="fa-solid fa-trash"
                                        />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection

@section('page-scripts')
    @include('_partials.reording-script')
@endsection
