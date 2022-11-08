<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;

class adminProvinsiController extends Controller
{
    public function index() {
        $province = DB::table('provinces')
            ->get();
        return view(
            'admin.provinsi.index',
            [
                'province' => $province
            ]
        );
    }
}
