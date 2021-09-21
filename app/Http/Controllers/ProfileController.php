<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function tutor(){
        $user = auth()->user();
        $user->load('tutor');

    }
}
