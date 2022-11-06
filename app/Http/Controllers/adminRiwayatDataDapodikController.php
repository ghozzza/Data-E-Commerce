<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminRiwayatDataDapodikController extends Controller
{
    public function index() {
        return view('admin.riwayat-data-dapodik.index');
    }
}
