<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function student()
    {
        $user = auth()->user();
        $student = $user->student;
        $enrolled_courses = $student->courses;
        $peers = $student->peers()->take(10);
        $new_courses = Course::all()->take(8);
    }

    public function tutor()
    {
        $user = auth()->user();
        $tutor = $user->tutor;
        $total_courses = $tutor->total_courses;
        $total_students = $tutor->total_students;
        $total_cashout = $tutor->total_cashout;

        return view('tutors.dashboard', compact('total_courses', 'user', 'tutor','total_cashout','total_students'));
    }
}
