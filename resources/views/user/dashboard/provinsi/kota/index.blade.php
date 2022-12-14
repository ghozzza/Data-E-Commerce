@extends('layouts.user.assets')

@section('midtrans')
    @include('layouts.user.midtrans')


@section('content')
    @include('layouts.user.header')
    @if ($orders_count != 0 &&
        $mid[$orders_count - 1]['transaction_status'] == 'settlement' &&
        $orders[$orders_count - 1]->tgl_berakhir_langganan >= date('Y-m-d'))
       @include('layouts.user.provinsi.kota.udah-bayar')
    @else
        @include('layouts.user.belum-bayar')
    @endif
    <div class="mt-5"></div>
    @include('layouts.user.footer')
@endsection
