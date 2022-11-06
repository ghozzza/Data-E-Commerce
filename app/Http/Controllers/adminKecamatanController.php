<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminKecamatanController extends Controller
{
    public function index() {
        return view('admin.kecamatan.index');
    }
}
