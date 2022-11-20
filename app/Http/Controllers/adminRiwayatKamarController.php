<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminRiwayatKamarController extends Controller
{
    public function index()
    {
        $riwayat_kamars = DB::table('riwayat_kamars')->get();
        return view('admin.riwayat-kamar.index', ['riwayat_kamars' => $riwayat_kamars]);
    }
}
