<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function show(Lesson $lesson)
    {
        return view('pages.lesson.show', compact('lesson'));
    }
}
