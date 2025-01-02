<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::all();
        return view('pages.courses.index', compact('courses'));
    }

    public function show(string $id): View
    {
//        $course = DB::table('courses')->where('id', $id)->first();
        $course = Course::find($id);
        return view('pages.courses.show', compact('course'));

    }
}
