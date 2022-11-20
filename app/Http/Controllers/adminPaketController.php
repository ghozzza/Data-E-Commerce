<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminPaketController extends Controller
{
    public function index()
    {
        $pakets = DB::table('pakets')->get();
        return view('admin.paket.index', ['pakets' => $pakets]);
    }
}
