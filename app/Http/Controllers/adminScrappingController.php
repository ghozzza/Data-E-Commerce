<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class adminScrappingController extends Controller
{
    public function index()
    {
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=0&kode_wilayah=000000&semester_id=20221');
        $scrap = json_decode($responses);
        // dd($scrap[0]->nama);
        return view('admin.scrapping.index', ['scrap' => $scrap]);
    }
    public function details(Request $request)
    {
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=0&kode_wilayah=000000&semester_id=20221');
        $scrap = json_decode($responses);
        $i = $request->index;
        dd($scrap[$i]);
        return view('admin.scrapping.index', ['scrap' => $scrap]);
    }
}
