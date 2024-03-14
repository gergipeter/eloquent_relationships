@extends('layouts.app')

@section('content')
    <h1>Contact Informations</h1>
        <!-- Create Button -->
        <a href="{{ route('contactInformations.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Add Contact Informations
        </a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactInformations as $contactInformation)
                    <tr>
                        <td>{{ $contactInformation->id }}</td>
                        <td>{{ $contactInformation->student->name }}</td>
                        <td>{{ $contactInformation->address }}</td>
                        <td>
                            <!-- Show Button -->
                            <a href="{{ route('contactInformations.show', $contactInformation) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i> Show
                            </a>
                            <!-- Edit Button -->
                            <a href="{{ route('contactInformations.edit', $contactInformation) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <!-- Delete Button -->
                            <form action="{{ route('contactInformations.destroy', $contactInformation) }}" method="POST" class="d-inline">
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
@endsection
