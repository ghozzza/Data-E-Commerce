<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;

class adminSekolahController extends Controller
{
    public function index()
    {
        $sekolah = DB::table('sekolahs')
            ->get();
        return view(
            'admin.sekolah.index',
            [
                'sekolah' => $sekolah
            ]
        );
    }
}
