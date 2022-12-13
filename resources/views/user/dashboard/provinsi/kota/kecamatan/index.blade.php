@extends('layouts.user.assets')

@section('midtrans')
    @include('layouts.user.midtrans')


@section('content')
    @include('layouts.user.header')
    <br><br>

    <main id="main" class="mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1>Dashboard / Provinsi / Kota / Kecamatan</h1>
            </div>
            @include('layouts.user.bar-chart')
            <div class="row">
                <hr>
                <div class="text-center">
                    <h3>Visualisasi Data {{ $data->nama }}</h3>
                </div>
                {{-- <p>tk: {{ $data->tk }}</p>
                <p>kb: {{ $data->kb }}</p>
                <p>sps: {{ $data->sps }}</p>
                <p>pkbm: {{ $data->pkbm }}</p>
                <p>skb: {{ $data->skb }}</p>
                <p>sd: {{ $data->sd }}</p>
                <p>sd: {{ $data->sd }}</p>
                <p>smp: {{ $data->smp }}</p>
                <p>sma: {{ $data->sma }}</p>
                <p>smk: {{ $data->smk }}</p>
                <p>slb: {{ $data->slb }}</p>
                <b> total sekolah: {{ $data->sekolah }}</b> --}}
                <hr>
            </div>
        </div>
    </main><!-- End #main -->
    <div class="mt-5"></div>
    @include('layouts.user.footer')
@endsection
