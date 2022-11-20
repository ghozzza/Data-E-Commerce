<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminRiwayatDataDapodikController extends Controller
{
    public function index()
    {
        $riwayat_data_dapodiks = DB::table('riwayat_data_dapodiks')->get();
        return view('admin.riwayat-data-dapodik.index',['riwayat_data_dapodiks' => $riwayat_data_dapodiks]);
    }
}
