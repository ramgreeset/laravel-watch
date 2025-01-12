<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $courses = Course::latest()->take(1)->get();
        return view('pages.index', compact('courses'));
    }
}
