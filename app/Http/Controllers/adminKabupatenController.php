<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kabupaten;


class adminKabupatenController extends Controller
{
    public function index()
    {
        $regencies = DB::table('regencies')->get();
        return view('admin.kabupaten.index', ['regencies' => $regencies]);
    }
}
