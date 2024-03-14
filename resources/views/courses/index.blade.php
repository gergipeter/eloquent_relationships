@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
        <!-- Create Button -->
        <a href="{{ route('courses.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Add Course
        </a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Teacher</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->teacher->name }}</td>
                        <td>
                            <!-- Show Button -->
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i> Show
                            </a>
                            <!-- Edit Button -->
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <!-- Delete Button -->
                            <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact information?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('includes.pagination', ['data' => $courses])

@endsection
