@extends('layout.master')

@section('title','Create Project')
@section('page-title', 'Create Project')

@section('main-breadcrumb', 'Projects')
@section('main-breadcrumb-link', route('projects.index'))

@section('sub-breadcrumb','Create Project')

@section('content')

    <div class="col-md-12 mb-md-5 mb-xl-10">
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body row">
                    <div class="mb-10 col-md-6">
                        <label for="name" class="required form-label">Name</label>
                        <input type="text" value="{{ old('name')}}" name="name" class="form-control form-control-solid required" required/>
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