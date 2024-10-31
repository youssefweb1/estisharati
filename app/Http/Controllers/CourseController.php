<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // Display a list of all courses
    public function index()
    {
        $courses = Course::all();
        return view('courses', compact('courses'));
    }
}
