<?php

use Illuminate\Support\Facades\Route;

Route::view('/index', 'index')->name('index');
Route::view('/courses', 'courses')->name('courses');
Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');
