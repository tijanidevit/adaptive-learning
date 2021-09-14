<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'category_id' => 'required|string',
            'title' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required|min:8',
        ]);
//        dd($data['status']);
        $data['thumbnail'] = $this->file_upload('image','public/course_images');

        $a = auth()->user()->tutor->courses()->create($data);

        return redirect('tutor/courses/'.$a->id)->with('success',"Course Created Successfully");
    }

    public function show(Course $course)
    {
        $user_role = $this->getUserRole();
        $course_students = $course->students;
        $course_sections = $course->sections()->load('section_contents');

        //section_contents = $course_sections->section_contents;


        if ($user_role = 0)
            return view('admin.courses.details', compact(['course_sections','course','course_students']));
        if ($user_role = 1)
            return view('tutors.courses.details', compact(['course_sections','course','course_students']));
        if ($user_role = 2)
            return view('students.courses.details', compact(['course_sections','course','course_students']));
    }

    public function edit(Course $course)
    {
        //
    }

    public function update(Request $request, Course $course)
    {
        //
    }

    public function destroy(Course $course)
    {
        //
    }
}
