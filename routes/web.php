<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/student', function () {
    return view('students.home');
})->name('student_home');
Route::get('/student/login', function () {
    return view('students.auth.login');
});
Route::get('/student/register', function () {
    return view('students.auth.register');
});



Route::post('/student/register', [App\Http\Controllers\AuthController::class, 'registerStudent'])->name('student_login');
Route::post('/student/login', [App\Http\Controllers\AuthController::class, 'login'])->name('student_login');

Route::group(['prefix' => 'student', 'middleware' => 'student_auth'], function() {
    Route::get('/dashoard', [App\Http\Controllers\DashboardController::class, 'studentDashboard'])->name('student.dashboard');

});
