<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Paket;
use App\Models\Order;

class paketController extends Controller
{
    public function details($id)
    {
        $pakets = Paket::findOrFail($id);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');


        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                //  'gross_amount' => 10000,
            ),
            'item_details' => array(
                [
                    'id' => $pakets['id'],
                    'price' => $pakets['harga'],
                    'quantity' => 1,
                    'name' => $pakets['nama'],
                    'subscribtion' => $pakets['lama_langganan']

                    // 'id' => $v->id,
                    // 'price' => $v->harga,
                    // 'quantity' => 1,
                    // 'name' => $v->nama,
                ]
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->username,
                'last_name' => Auth::user()->username,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->no_telp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('user.paket.details', [
            'paket' => $pakets,
            'snap_token' => $snapToken,
        ]);
    }

    public function payment_post(Request $request, $id)
    {

        $json = json_decode($request->get('json'));
        $pakets = Paket::find($id);
        // dd($json);
        $order = new Order();
        $order->status = $json->transaction_status;
        $order->user_id = Auth::user()->id;
        $order->uname = Auth::user()->username;
        $order->email = Auth::user()->email;
        $order->number = Auth::user()->no_telp;
        $order->paket_id = $id;
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->tgl_order = date("Y-m-d H:i:s");
        $order->tgl_mulai_langganan = date("Y/m/d");
        $order->tgl_berakhir_langganan = date("Y-m-d", strtotime(' + ' . $pakets['lama_langganan'] . ' days'));
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;
        return $order->save() ? redirect(url('/admin-dashboard/paket'))->with('success', 'Jadwalmu Berhasil di Order!') : redirect(url('/admin-dashboard/paket'))->with('alert-failed', 'Terjadi kesalahan');

        // dd();
    }
}
