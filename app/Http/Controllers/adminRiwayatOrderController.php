<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminRiwayatOrderController extends Controller
{
    public function index()
    {
        $riwayat_orders = DB::table('riwayat_orders')->get();
        return view('admin.riwayat-order.index', ['riwayat_orders' => $riwayat_orders]);
    }
}
