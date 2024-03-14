<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentCourseController extends Controller
{
    public function index()
    {
        $studentCourses = Student::with('courses')->get();
        return view('studentCourses.index', compact('studentCourses'));
    }
}