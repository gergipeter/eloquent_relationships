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
                    <th>Price</th>
                    <th>Start Date</th>
                    <th>End Date</th>
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
                        <td>{{ $course->price }}</td>
                        <td>{{ $course->start_date }}</td>
                        <td>{{ $course->end_date }}</td>
                        <td>
                            @include('includes.crud_buttons', ['route' => 'courses', 'data' => $course])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('includes.pagination', ['data' => $courses])

@endsection
