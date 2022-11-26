<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials, true)) {
            if (Auth::user()->id_roles == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/admin-dashboard');
            }

            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginFailed', 'Login Failed!');
    }
    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/sign-in');
    }
}
