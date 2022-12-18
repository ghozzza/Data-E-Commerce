<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        $orders_count = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->count();

        $mid = $this->order($orders_count, $orders);

        // dd($orders_count);
        // dd($mid[2]['transaction_status']);

        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=0&kode_wilayah=000000&semester_id=20221');
        $scrap = json_decode($responses);
        return view('user.dashboard.index', ['scrap' => $scrap, 'orders' => $orders, 'orders_count' => $orders_count, 'mid' => $mid]);
    }
    public function provinsi(Request $request)
    {
        $orders = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        $orders_count = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->count();

        $mid = $this->order($orders_count, $orders);

        $kode = $request->kode_wilayah;
        $i = $request->index;
        $data = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=0&kode_wilayah=000000&semester_id=20221');
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=1&kode_wilayah=' . $kode . '&semester_id=20221');
        $scrap = json_decode($responses);
        // dd($scrap);
        $data = json_decode($data);
        $data = $data[$i];
        // dd($data);
        return view('user.dashboard.provinsi.index', ['scrap' => $scrap, 'data' => $data, 'orders' => $orders, 'orders_count' => $orders_count, 'mid' => $mid]);
    }
    public function kota(Request $request)
    {
        $orders = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        $orders_count = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->count();

        $mid = $this->order($orders_count, $orders);

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
        return view('user.dashboard.provinsi.kota.index', ['scrap' => $scrap, 'data' => $data, 'orders' => $orders, 'orders_count' => $orders_count, 'mid' => $mid]);
    }
    public function kecamatan(Request $request)
    {
        $orders = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->get();
        $orders_count = DB::table('orders')
            ->where('user_id', '=', Auth::user()->id)
            ->count();

        $mid = $this->order($orders_count, $orders);

        $kode_kecamatan = $request->kode_wilayah_kecamatan;
        $kode = $request->kode_wilayah;
        $i = $request->index;
        // dd($kode_kecamatan);
        // $data = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=1&kode_wilayah=' . $kode_kecamatan . '&semester_id=20221');
        $data = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=2&kode_wilayah=' . $kode_kecamatan . '&semester_id=20221');
        $responses = Http::get('https://dapo.kemdikbud.go.id/rekap/progresSP?id_level_wilayah=3&kode_wilayah=' . $kode . '&semester_id=20221&bentuk_pendidikan_id=');

        $scrap = json_decode($responses);
        // dd($scrap);
        $data = json_decode($data);
        // dd($data);
        $data = $data[$i];
        // dd($data);
        return view('user.dashboard.provinsi.kota.kecamatan.index', ['scrap' => $scrap, 'data' => $data, 'orders' => $orders, 'orders_count' => $orders_count, 'mid' => $mid]);
    }
    // 
    function order($orders_count, $orders)
    {
        if ($orders_count != 0) {
            for ($i = 0; $i < $orders_count; $i++) {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/" . $orders[$i]->order_id . "/status",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_POSTFIELDS => "\n\n",
                    CURLOPT_HTTPHEADER => array(
                        "Accept: application/json",
                        "Content-Type: application/json",
                        "Authorization: Basic U0ItTWlkLXNlcnZlci1EQmw5OFdBX3NnZ2U2eGRGU2hucXVqWjY6"
                    ),
                ));

                $response = curl_exec($curl);
                if ($i < $orders_count) {
                    $responses[$i] = json_decode($response, true);
                    // continue;
                }
            }

            curl_close($curl);
            return $responses;
            // return view('user.riwayat-pembelian.index', [
            //     'order' => $orders,
            //     'orders_count' => $orders_count,
            //     'responses' => $responses,
            // ]);
        }
    }
}
