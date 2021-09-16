<?php

namespace App\Http\Controllers;

use App\Models\QuizOption;
use Illuminate\Http\Request;

class QuizOptionController extends Controller
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
        $tutor = auth()->user()->tutor();
        $data = $request->validate([
            'section_quiz_id' => 'required|integer',
            'option' => 'required',
            'is_answer' => 'required|integer',
        ]);

        QuizOption::create($data);
        $section_quiz_id = $data['section_quiz_id'];
        return redirect()->route('tutor.course.quiz', [$section_quiz_id])->with('success','Option added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function show(QuizOption $quizOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizOption $quizOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuizOption $quizOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizOption  $quizOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizOption $quizOption)
    {
        //
    }
}
