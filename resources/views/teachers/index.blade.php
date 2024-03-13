@extends('layouts.app')

@section('content')
    <h1>Teachers</h1>
        <!-- Create Button -->
        <a href="{{ route('teachers.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Add Teacher
        </a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>
                            <!-- Show Button -->
                            <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i> Show
                            </a>
                            <!-- Edit Button -->
                            <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <!-- Delete Button -->
                            <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
