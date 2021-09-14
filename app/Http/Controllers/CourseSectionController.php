<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSection;
use Illuminate\Http\Request;

class CourseSectionController extends Controller
{

    public function index(Course $course)
    {
        $sections = $course->sections;
        $user_role = $this->getUserRole();

        if ($user_role = 0)
            return view('admin.course.sections', compact(['course','sections']));
        if ($user_role = 1)
            return view('tutors.course.sections', compact(['course','sections']));
        if ($user_role = 2)
            return view('students.course.sections', compact(['course','sections']));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(CourseSection $courseSection)
    {
        //
    }

    public function edit(CourseSection $courseSection)
    {
        //
    }

    public function update(Request $request, CourseSection $courseSection)
    {
        //
    }

    public function destroy(CourseSection $courseSection)
    {
        //
    }
}
