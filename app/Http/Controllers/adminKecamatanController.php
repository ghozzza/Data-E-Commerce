<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminKecamatanController extends Controller
{
    public function index()
    {
        $villages = DB::table('villages')->get();
        return view('admin.kecamatan.index', ['villages' => $villages]);
    }
}
