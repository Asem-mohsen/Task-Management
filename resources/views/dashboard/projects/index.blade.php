@extends('layout.master')

@section('title','Projects')
@section('page-title', 'Projects')

@section('main-breadcrumb', 'Projects')
@section('main-breadcrumb-link', route('projects.index'))

@section('sub-breadcrumb', 'Projects')

@section('content')

<div class="col-md-12 mb-md-5 mb-xl-10">
    <div class="card">

        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                </div>
            </div>
            
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-table-toolbar="base">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary"><i class="ki-duotone ki-plus fs-2"></i>Add Project</a>
                </div>
            </div>
        </div>

        <div class="card-body pt-0">

            <table class="table table-striped table-row-dashed align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 table-head">
                        <th>#</th>
                        <th>Name</th>
                        <th>Number of Tasks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <a href="{{ route('projects.edit',$project) }}">
                                    {{ $project->id }}
                                </a>
                            </td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->tasks->count() }}</td>
                            <td>
                                <x-table-icon-link 
                                    :route="route('projects.edit',$project)" 
                                    colorClass="primary"
                                    title="Edit"
                                    iconClasses="fa-solid fa-arrow-right"
                                />
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
    @include('_partials.dataTable-script')
@endsection
