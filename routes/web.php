<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/student', function () {
    return view('students.home');
});
Route::get('/student/login', function () {
    return view('students.auth.login');
});
Route::get('/student/register', function () {
    return view('students.auth.register');
});
