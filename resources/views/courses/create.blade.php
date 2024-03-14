@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Create Course</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('courses.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label>
                                <input type="textarea" class="form-control" name="description" id="description">
                            </div>
                            <div class="mb-3">
                                <label for="teacher_id" class="form-label">Teacher:</label>
                                <select name="teacher_id" id="teacher_id" class="form-select">
                                    @foreach($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
