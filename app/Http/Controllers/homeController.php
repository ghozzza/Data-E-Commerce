<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class homeController extends Controller
{
    public function index()
    {
        $paket = DB::table('pakets')
            ->get();
        return view('user.index', ['paket' => $paket]);
    }
    public function edit()
    {
        return view('user.edit');
    }
    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        if ($request->password != null) {
            $validatedData = $request->validate([
                "password" => "required",
                "confirmPassword" => "required|same:password",
            ]);
            $validatedData['password'] =  Hash::make($validatedData['password']);
            $user->update($validatedData);
        }
        $data = $request->all();
        $user->update($data);
        if ($user) {
            return redirect('edit')
                ->with([
                    'success' => 'Profile has been updated successfully'
                ]);
        } else {
            return redirect('edit')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
    public function password()
    {
        return view('user.edit-password');
    }
    public function updatePassword(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $validatedData = $request->validate([
            "password" => "required",
            "confirmPassword" => "required|same:password",
        ]);
        $validatedData['password'] =  Hash::make($validatedData['password']);
        $user->update($validatedData);
        if ($user) {
            return redirect('edit/password')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect('edit/password')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
}
