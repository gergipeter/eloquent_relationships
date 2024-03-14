@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Contact Informations</h1>
                    </div>
                    <div class="card-body">
                        <p><strong>Student Name:</strong> {{ $contactInformation->student->name }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('contactInformations.index') }}" class="btn btn-primary">Back to List</a>
                        <a href="{{ route('contactInformations.edit', $contactInformation) }}" class="btn btn-success">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
