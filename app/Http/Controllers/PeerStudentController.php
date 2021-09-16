<?php

namespace App\Http\Controllers;

use App\Models\PeerStudent;
use Illuminate\Http\Request;

class PeerStudentController extends Controller
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
            'peer_id' => 'required|integer'
        ]);

        $student->peer()->create($data);
        $peer_id = $data['peer_id'];
        return redirect()->route('student.course.peer', [$peer_id])->with('success','Message sent successfully');
    }

    public function show(PeerStudent $peerStudent)
    {
        //
    }

    public function edit(PeerStudent $peerStudent)
    {
        //
    }

    public function update(Request $request, PeerStudent $peerStudent)
    {
        //
    }

    public function destroy(PeerStudent $peerStudent)
    {
        //
    }
}
