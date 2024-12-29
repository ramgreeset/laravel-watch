<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = DB::select('SELECT * FROM courses');
        return view('courses', compact('courses'));
    }

    public function show(string $id): View
    {
        $course = DB::selectOne('SELECT * FROM courses where id =:id', compact('id'));
        return view('course', compact('course'));

    }
}
