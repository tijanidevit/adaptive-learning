<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
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
        $student = auth()->user()->student();
        $data = $request->validate([
            'course_id' => 'required'
        ]);

        $check_already_enrolled = Payment::all()->where('student_id', $student->id )->where('course_id', $data['course_id']);
        if (empty($check_already_enrolled)) {
            $student->payments()->create($data);
        }
        $course_id = $data['course_id'];
        return redirect()->route('student.course', [$course_id])->with('success','Course enrolled successfully');
    }

    public function show(Payment $payment)
    {
        //
    }

    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
