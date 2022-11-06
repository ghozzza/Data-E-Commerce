<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminPaketController extends Controller
{
    public function index() {
        return view('admin.paket.index');
    }
}
