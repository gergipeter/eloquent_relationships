@extends('layouts.app')

@section('content')
    <h1>Students</h1>
        <!-- Create Button -->
        <a href="{{ route('students.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Add Student
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
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <!-- Show Button -->
                            <a href="{{ route('students.show', $student) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i> Show
                            </a>
                            <!-- Edit Button -->
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <!-- Delete Button -->
                            <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">
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
