<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('login.register');
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            "username" => "required|min:1|unique:users",
            "email" => "required|email:dns|unique:users",
            "password" => "required",
            "no_telp" => "required",
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = new User;
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->no_telp = $validatedData['no_telp'];

        $user->id_roles = 2;

        $user->save();
        $user->createToken('auth_token')->plainTextToken;
        return redirect('/sign-in')->with('success', 'Registration successfull!, Please login');
    }
}
