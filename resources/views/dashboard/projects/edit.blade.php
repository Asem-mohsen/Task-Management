@extends('layout.master')

@section('title','Edit Project')
@section('page-title', 'Edit Project')

@section('main-breadcrumb', 'Projects')
@section('main-breadcrumb-link', route('projects.index'))

@section('sub-breadcrumb','Edit Project')

@section('content')

    <div class="col-md-12 mb-md-5 mb-xl-10">
        <form action="{{ route('projects.update',$project) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="card">
                <div class="card-body row">
                    <div class="mb-10 col-md-6">
                        <label for="name" class="required form-label">Name</label>
                        <input type="text" value="{{ $project->name ?? old('name') }}" name="name" class="form-control form-control-solid required" required/>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-dark">Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection