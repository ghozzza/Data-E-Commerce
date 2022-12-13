<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class dashboardController extends Controller
{
    public function index()
    {
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=0&kode_wilayah=000000&semester_id=20221');
        $scrap = json_decode($responses);
        // dd($scrap);
        return view('user.dashboard.index', ['scrap' => $scrap]);
    }
    public function provinsi(Request $request)
    {
        $kode = $request->kode_wilayah;
        $i = $request->index;
        $data = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=0&kode_wilayah=000000&semester_id=20221');
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=1&kode_wilayah=' . $kode . '&semester_id=20221');
        $scrap = json_decode($responses);
        // dd($scrap);
        $data = json_decode($data);
        $data = $data[$i];
        // dd($data);
        return view('user.dashboard.provinsi.index', ['scrap' => $scrap, 'data' => $data]);
    }
    public function kota(Request $request)
    
    {
        $kode_kota = $request->kode_wilayah_kota;
        $kode = $request->kode_wilayah;
        $i = $request->index;
        $data = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=1&kode_wilayah=' . $kode_kota . '&semester_id=20221');
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=2&kode_wilayah=' . $kode . '&semester_id=20221');
        $scrap = json_decode($responses);
        // dd($scrap);
        $data = json_decode($data);
        $data = $data[$i];
        // dd($data);
        return view('user.dashboard.provinsi.kota.index', ['scrap' => $scrap, 'data' => $data]);
    }
    public function kecamatan(Request $request)
    {
        $kode_kecamatan = $request->kode_wilayah_kecamatan;
        $kode = $request->kode_wilayah;
        $i = $request->index;
        $data = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=1&kode_wilayah=' . $kode_kecamatan . '&semester_id=20221');
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=2&kode_wilayah=' . $kode . '&semester_id=20221');
        $scrap = json_decode($responses);
        // dd($scrap);
        $data = json_decode($data);
        $data = $data[$i];
        // dd($data);
        return view('user.dashboard.provinsi.kota.kecamatan.index', ['scrap' => $scrap, 'data' => $data]);
    }
}
