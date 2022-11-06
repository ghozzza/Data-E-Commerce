<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminKabupatenController extends Controller
{
    public function index() {
        return view('admin.kabupaten.index');
    }
}
