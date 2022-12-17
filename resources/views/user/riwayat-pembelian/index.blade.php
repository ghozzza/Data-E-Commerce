@extends('layouts.user.assets')

@section('midtrans')
    @include('layouts.user.midtrans')


@section('content')
    @include('layouts.user.header')
    <br><br>

    <main id="main" class="mt-5">
        <div class="container">
            <div class="text-center">
                <h1>Riwayat Pembelian</h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Harga</th>
                        <th scope="col">ID Order</th>
                        <th scope="col">Tanggal Berlaku</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $i => $v)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td>{{ $v->nama_paket }}</td>
                            <td>{{ $v->gross_amount }}</td>
                            <td>{{ $v->order_id }}</td>
                            <td>{{ $v->tgl_berakhir_langganan }}</td>
                            @if ($responses[$i]['transaction_status'] == 'settlement')
                                <td>Lunas</td>
                            @else
                                <td>{{ $responses[$i]['transaction_status'] }}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main><!-- End #main -->
    <div class="mt-5"></div>
    @include('layouts.user.footer')
@endsection
