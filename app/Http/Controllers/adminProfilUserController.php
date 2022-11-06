<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminProfilUserController extends Controller
{
    public function index() {
        return view('admin.profil-user.index');
    }
}
