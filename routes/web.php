<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/courses', 'courses')->name('сourses');
Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');
