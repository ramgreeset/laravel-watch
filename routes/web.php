<?php

use Illuminate\Support\Facades\Route;

$courses = [
    [
        'title' => 'Course one',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
        'lessons_count' => '5',
        'length' => '2h 43m',
    ],
    [
        'title' => 'Course two',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
        'lessons_count' => '5',
        'length' => '2h 43m',
    ],
    [
        'title' => 'Course three',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
        'lessons_count' => '5',
        'length' => '2h 43m',
    ],
    [
        'title' => 'Course four',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
        'lessons_count' => '5',
        'length' => '2h 43m',
    ],
];

Route::get('/', fn() => view('index', ['courses' => $courses]))->name('index');
Route::get('/courses', fn() => view('courses', ['courses' => $courses]))->name('courses');
Route::get('/course', fn() => view('course', ['course' => $courses[0]]))->name('course');

Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');

