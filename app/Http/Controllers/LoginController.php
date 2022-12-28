<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->username);

        // $data = 'select * from user where username = $usernae'
        // $data = User::where('username', $request->username)->where('password', $request->password)->first();
        $data = request(['username', 'password']);
        Auth::attempt($data);
        if (!Auth::check()) {
            return back()->with('error', 'username / password salah');
        }
        session()->flash('login');
        return redirect('/dashboard');
    }

    public function logout()
    {
        auth()->logout();
        
        return redirect('/login');
    }
}
