<?php

namespace App\Http\Controllers;

use App\Models\Peer;
use Illuminate\Http\Request;

class PeerController extends Controller
{
    public function index()
    {
        $peers = Peer::all()->sortBy('peer_name');
        return view('admin.peers', compact('peers'));
    }

    public function create()
    {
        return view('students.peers.create');
    }

    public function store(Request $request)
    {
        $student = auth()->user()->student();
        $data = $request->validate([
            'course_id' => 'required|integer',
            'peer_name' => 'required',
        ]);

        $peer = $student->peers()->create($data);
        $peer_id = $data['peer_id'];
        return redirect()->route('student.course.peer', [$peer_id])->with('success','Course Peer Created successfully');
    }

    public function show(Peer $peer)
    {
        $chats = $peer->chats;
        return view('students.courses.peer.chat', compact(['peer','chats']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peer  $peer
     * @return \Illuminate\Http\Response
     */
    public function edit(Peer $peer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peer  $peer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peer $peer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peer  $peer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peer $peer)
    {
        //
    }
}
