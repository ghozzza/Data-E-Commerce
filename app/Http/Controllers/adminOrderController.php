<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminOrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->get();
        $orders_count = DB::table('orders')->count();
        if ($orders != null) {
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
        }
        // dd($responses[0]['transaction_status']);
        return view('admin.order.index', [
            'orders' => $orders,
            'orders_count' => $orders_count,
            'responses' => $responses,
        ]);
    }
}
