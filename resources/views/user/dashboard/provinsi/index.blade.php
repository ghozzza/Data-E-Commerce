@extends('layouts.user.assets')

@section('midtrans')
    @include('layouts.user.midtrans')


@section('content')
    @include('layouts.user.header')
    <br><br>

    <main id="main" class="mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1>Dashboard / Provinsi</h1>
            </div>
            <div class="row">
                <hr>
                <div class="text-center">
                    <h3>Visualisasi Data {{ $data->nama }}</h3>
                </div>
                <p>tk: {{ $data->tk }}</p>
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
                <b> total sekolah: {{ $data->sekolah }}</b>
                <hr>
                @foreach ($scrap as $i => $v)
                    <div class="col-4 mb-3">
                        <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <h5>{{ $v->nama }}</h5>
                                <p>{{ $v->kode_wilayah }} kota</p>
                                <form action="{{ url('dashboard/provinsi/kota') }}" method="GET">
                                    <input type="hidden" name="index" value="{{ $i }}">
                                    <input type="hidden" name="kode_wilayah" value="{{ $v->kode_wilayah }}">
                                    <input type="hidden" name="kode_wilayah_kota" value="{{ $data->kode_wilayah }}">
                                    <button class="btn btn-primary">Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main><!-- End #main -->
    <div class="mt-5"></div>
    @include('layouts.user.footer')
@endsection
