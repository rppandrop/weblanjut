<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function register(Request $request){
        $user = User::create([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect('/');
    }

    public function login(Request $request){
        if(Auth::attempt([
            'email' => $request -> email,
            'password' => $request -> password
        ])){
            return view('download');
        }
    }

    public function download(){
        return view('download');
    }
}
