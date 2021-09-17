<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/students', function () {
    return redirect()->to('students/login');
})->name('student_home');

Route::get('/students/login', function () {
    return view('students.auth.login');
})->middleware('pre_auth');

Route::get('/students/register', function () {
    return view('students.auth.register');
})->middleware('pre_auth');


Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);



Route::post('/students/register', [App\Http\Controllers\AuthController::class, 'registerStudent'])->name('student_register');


Route::group(['prefix' => 'students', 'middleware' => 'student_auth'], function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'student'])->name('student.dashboard');
});





//Tutors
Route::get('/tutors/login', function () { return view('tutors.auth.login'); })->middleware('pre_auth');

Route::get('/tutors/register', function () { return view('tutors.auth.register'); })->middleware('pre_auth');
Route::post('/tutors/register', [App\Http\Controllers\AuthController::class, 'registerTutor'])->name('tutor_register');

