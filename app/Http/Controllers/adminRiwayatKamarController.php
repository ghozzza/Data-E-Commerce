<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminRiwayatKamarController extends Controller
{
    public function index() {
        return view('admin.riwayat-kamar.index');
    }
}
