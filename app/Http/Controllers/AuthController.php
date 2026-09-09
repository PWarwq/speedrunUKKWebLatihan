<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'username' => 'required | unique:users,username',
            'password' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request -> password),
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request){
        $request -> validate([
            'username' => 'required',
            'password'=> 'required',
        ]);

        if (Auth::attempt(['username' => $request -> username, 'password' => $request -> password])){
            $request->session()->regenerate();
            return redirect()->route('students.index');
        }
    }
}
