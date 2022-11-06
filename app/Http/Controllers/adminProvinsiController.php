<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminProvinsiController extends Controller
{
    public function index() {
        return view('admin.provinsi.index');
    }
}
