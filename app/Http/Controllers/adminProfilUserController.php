<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil_user;

class adminProfilUserController extends Controller
{
    public function index()
    {
        $profil_user = Profil_user::all();
        return view('admin.profil-user.index', ['profil_user' => $profil_user]);
    }
}
