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
        $enrolled_courses = $user->student_courses()->take(8);
        $peers = $user->peers()->take(10);
        $new_courses = Course::all()->take(8);
    }
}
