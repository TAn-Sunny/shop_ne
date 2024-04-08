<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Lưu thông tin người dùng vào session
        session(['users_id' => Auth::user()->id]);

        // Kiểm tra xem người dùng có phải là admin không
        if (Auth::user()->role == 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/home');
        }
    }

    return back()->withErrors([
        'email' => 'Email or Password is incorrect.',
    ]);
}

    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
