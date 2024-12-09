<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::get('/courses', fn() => 'Courses')->name('сourses');
//Route::get('/', 'Contact')->name('contact');
//Route::get('/', 'Login')->name('login');
//Route::get('/', 'Register')->name('register');
