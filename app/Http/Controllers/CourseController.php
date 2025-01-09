<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        $courses = Course::latest()
            ->whereLike('title', "%{$request->search}%")
            ->orWhereLike('description', "%{$request->search}%")
            ->paginate(8)
            ->withQueryString();
        return view('pages.courses.index', compact('courses'));
    }


    public function show(Course $course): View
    {

        return view('pages.courses.show', compact('course'));

    }
}
