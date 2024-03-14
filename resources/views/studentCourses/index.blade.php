@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Students and Courses</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Courses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($studentCourses as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>
                                    <ul>
                                        @foreach($student->courses as $course)
                                            <li>{{ $course->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
