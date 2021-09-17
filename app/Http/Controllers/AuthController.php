<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $remember = true)) {
            $request->session()->regenerate();
//            dd(auth()->user());
            if (auth()->user()->role == 0){
                return redirect()->intended('admin/dashboard');
            }

            if (auth()->user()->role == 2){
                return redirect()->intended('students/dashboard');
            }

            return redirect()->intended('tutors/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function registerStudent(Request $request)
    {
        $data = $this->verifyData();

        $data['role'] = 2;

        $user = $this->create($data);
        return $this->postRegister($user);
    }

    public function registerTutor(Request $request)
    {
        $data = $this->verifyData();

        $data['role'] = 1;

        $user = $this->create($data);
        return $this->postRegister($user);
    }

    public function postRegister($user)
    {
        Auth::login($user, $remember = true);
        if ($user->role == 1){
            return redirect()->intended('tutors/dashboard');
        }
        if ($user->role == 2){
            return redirect()->intended('students/dashboard');
        }
        if ($user->role == 0){
            return redirect()->intended('admin/dashboard');
        }

    }


    public function create($data)
    {
        $data['password'] = Hash::make($data['password']);
//        dd($data);
        $user = User::create($data);
        if ($user->role == 1){
            $tutor_data = [
                'user_id' => $user->id,
                'cv_link' => '',
                'balance' => 0,
                'approval_status' => 0
            ];
            $user->tutor()->create($tutor_data);
        }
        if ($user->role == 2){
            $student_data = [
                'user_id' => $user->id
            ];
            $user->student()->create($student_data);
        }

        return $user;
    }

    public function verifyData(){
        return request()->validate([
            'first_name' => 'required',
            'other_names' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    }
}
