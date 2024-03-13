@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Course Details</h1>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $course->name }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('courses.index') }}" class="btn btn-primary">Back to List</a>
                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-success">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
