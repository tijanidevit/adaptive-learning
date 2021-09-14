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

    public function create(Course $course)
    {
        return view('tutors.course.create', compact('course'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'section' => 'required,string,min:3',
            'course_id' => 'required'
        ]);
        $section = CourseSection::create($data);
        $course_id = $data['course_id'];
        $section_id = $section->id;

        return redirect()->route('tutor.course_section', [$course_id,$section_id])->with('success',$data['section'].'created successfully');
    }

    public function show(CourseSection $courseSection)
    {
        $contents = $courseSection->contents;
        $course = $courseSection->course;
        $section = $courseSection;

        $user_role = $this->getUserRole();
        if ($user_role = 0)
            return view('admin.course.sections/show', compact(['course','section','contents']));
        if ($user_role = 1)
            return view('tutors.course.sections/show', compact(['course','section','contents']));
        if ($user_role = 2)
            return view('students.course.sections/show', compact(['course','section','contents']));
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

    }
}
