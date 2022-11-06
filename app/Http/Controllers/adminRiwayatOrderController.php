<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminRiwayatOrderController extends Controller
{
    public function index() {
        return view('admin.riwayat-order.index');
    }
}
