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
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');



Route::post('/students/register', [App\Http\Controllers\AuthController::class, 'registerStudent'])->name('student_register');


Route::group(['prefix' => 'students', 'middleware' => 'student_auth'], function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'student'])->name('student.dashboard');
});




//Tutors
Route::get('/tutors/login', function () { return view('tutors.auth.login'); })->middleware('pre_auth');

Route::get('/tutors', function () { return view('tutors.auth.register'); })->middleware('pre_auth');
Route::get('/tutors/register', function () { return view('tutors.auth.register'); })->middleware('pre_auth');
Route::post('/tutors/register', [App\Http\Controllers\AuthController::class, 'registerTutor'])->name('tutor_register');

Route::group(['prefix' => 'tutors', 'middleware' => 'tutor_auth'], function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'tutor'])->name('tutor.dashboard');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'tutor'])->name('tutor.profile');

    Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('tutor.course.index');
    Route::get('/courses/new', [App\Http\Controllers\CourseController::class, 'create'])->name('tutor.course.create');
    Route::post('/courses', [App\Http\Controllers\CourseController::class, 'store'])->name('tutor_course_store');
    Route::get('/courses/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('tutor.course.show');

});
