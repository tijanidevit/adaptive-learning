<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSection;
use App\Models\SectionContent;
use Illuminate\Http\Request;

class SectionContentController extends Controller
{
    public function index()
    {
        //
    }


    public function create(Course $course, CourseSection $courseSection)
    {
        return view('tutors.courses.section.content.new', compact(['course_section','course']));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'section_quiz_id' => 'required|integer',
            'option' => 'required',
            'is_answer' => 'required|integer',
        ]);

        QuizOption::create($data);
        $section_quiz_id = $data['section_quiz_id'];
        return redirect()->route('tutor.course.quiz', [$section_quiz_id])->with('success','Option added successfully');
    }

    public function show(SectionContent $sectionContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionContent  $sectionContent
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionContent $sectionContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionContent  $sectionContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionContent $sectionContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionContent  $sectionContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionContent $sectionContent)
    {
        //
    }
}
