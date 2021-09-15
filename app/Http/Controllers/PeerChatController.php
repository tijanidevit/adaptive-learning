<?php

namespace App\Http\Controllers;

use App\Models\PeerChat;
use Illuminate\Http\Request;

class PeerChatController extends Controller
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
            'peer_id' => 'required|integer',
            'message' => 'required',
        ]);

        $student->peer_chats()->create($data);
        $peer_id = $data['peer_id'];
        return redirect()->route('student.course', [$peer_id])->with('success','Course enrolled successfully');
    }

    public function show(PeerChat $peerChat)
    {
        //
    }

    public function edit(PeerChat $peerChat)
    {
        //
    }

    public function update(Request $request, PeerChat $peerChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeerChat  $peerChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeerChat $peerChat)
    {
        //
    }
}
