<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminUserController extends Controller
{
    public function index() {
        return view('admin.user.index');
    }
}
