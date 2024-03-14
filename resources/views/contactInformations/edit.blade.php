@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Edit Contact Informations</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contactInformations.update', $contactInformation) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name:</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $contactInformation->student->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
