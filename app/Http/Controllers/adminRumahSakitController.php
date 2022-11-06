<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminRumahSakitController extends Controller
{
    public function index() {
        return view('admin.rumah-sakit.index');
    }
}
