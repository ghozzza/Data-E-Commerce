<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $paket = DB::table('pakets')
            ->get();
        return view('user.index', ['paket' => $paket]);
    }
}
