@extends('layouts.user.assets')

@section('midtrans')
    @include('layouts.user.midtrans')


@section('content')
    @include('layouts.user.header')
    <br><br>

    <main id="main" class="mt-5">
        <div class="container mt-5">
            <div class="text-center">
                <h1>Konfirmasi Pembelian</h1>
            </div>
            <div class="mt-5"></div>
            <hr>
            <div class="mt-5"></div>
            <div class="text-center">
                <h3>
                    Nama Paket :
                </h3>
                <h3><b>{{ $paket['nama'] }}</b></h3>
                <h3>
                    Harga Paket :
                </h3>
                <h3><b>Rp {{ $paket['harga'] }}</b></h3>
                <h3>
                    Lama Langganan :
                </h3>
                <h3><b> {{ $paket['lama_langganan'] }} Hari</b></h3>
                <div class="mt-5"></div>
                <hr>
                <div class="mt-5"></div>
                <button class="btn btn-primary px-5" id="pay-button">Beli</button>
                <form action="" id="submit_form" method="POST">
                    @csrf
                    <input type="hidden" name="json" id="json_callback">
                </form>
                @include('layouts.script-midtrans')
            </div>
        </div>
    </main><!-- End #main -->
    <div class="mt-5"></div>
    @include('layouts.user.footer')
@endsection
