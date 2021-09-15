<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use Illuminate\Http\Request;

class CourseStudentController extends Controller
{
    public function index(Course $course)
    {
        $students = $course->students()->paginate(20);

        $user_role = $this->getUserRole();
        if ($user_role = 0)
            return view('admin.course.students', compact(['course','students']));
        if ($user_role = 1)
            return view('tutors.course.students', compact(['course','students']));
        if ($user_role = 2)
            return view('students.course.students', compact(['course','students']));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $student = auth()->user()->student();
        $data = $request->validate([
            'course_id' => 'required'
        ]);

        $check_already_enrolled = CourseStudent::all()->where('student_id', $student->id )->where('course_id', $data['course_id']);
        if (empty($check_already_enrolled)) {
            $student->courses()->create($data);
        }
        $course_id = $data['course_id'];
        return redirect()->route('student.course', [$course_id])->with('success','Course enrolled successfully');
    }

    public function show(CourseStudent $courseStudent)
    {
        //
    }

    public function edit(CourseStudent $courseStudent)
    {
        //
    }

    public function update(Request $request, CourseStudent $courseStudent)
    {
        //
    }

    public function destroy(CourseStudent $courseStudent)
    {
        //
    }
}
