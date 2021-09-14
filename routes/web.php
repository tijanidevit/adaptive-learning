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
})->middleware();

Route::get('/students/register', function () {
    return view('students.auth.register');
});



Route::post('/students/register', [App\Http\Controllers\AuthController::class, 'registerStudent'])->name('student_register');
Route::post('/students/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::group(['prefix' => 'student', 'middleware' => 'student_auth'], function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'studentDashboard'])->name('student.dashboard');

});
