@extends('layouts.admin.assets')

@section('content')
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Riwayat Order</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Riwayat Order</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="pagetitle">
            <div class="container">
                @if (\Session::has('success'))
                    <div class="p-3 mb-2 bg-success text-white rounded-3">{!! \Session::get('success') !!}</div>
                @elseif(\Session::has('error'))
                    <div class="p-3 mb-2 bg-danger text-white rounded-3">{!! \Session::get('error') !!}</div>
                @endif
                {{-- <a class="btn btn-primary mb-3" href="{{ url('/admin-dashboard/rumah-sakit/create') }}">Create</a> --}}
                <div class="table-responsive">
                    <table class=" table display table-stripped" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Status</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">ID Order</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tipe Pembayaran</th>
                                <th scope="col">Kode Pembayaran</th>
                                <th scope="col">URL PDF</th>
                                <th scope="col">schedule id</th>
                                <th scope="col">ID User</th>
                                <th scope="col">Tanggal Order</th>
                                <th scope="col">Tanggal Mulai Langganan</th>
                                <th scope="col">Tanggal Berakhir Langganan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $k => $v)
                                <tr>
                                    <th scope="row">{{ $v->id }}</th>
                                    <td>{{ $responses[$k]['transaction_status'] }}</td>
                                    <td>{{ $v->uname }}</td>
                                    <td>{{ $v->email }}</td>
                                    <td>{{ $v->number }}</td>
                                    <td>{{ $v->transaction_id }}</td>
                                    <td>{{ $v->order_id }}</td>
                                    <td>{{ $v->gross_amount }}</td>
                                    <td>{{ $v->payment_type }}</td>
                                    <td>{{ $v->payment_code }}</td>
                                    <td>{{ $v->pdf_url }}</td>
                                    <td>{{ $v->paket_id }}</td>
                                    <td>{{ $v->user_id }}</td>
                                    <td>{{ $v->tgl_order }}</td>
                                    <td>{{ $v->tgl_mulai_langganan }}</td>
                                    <td>{{ $v->tgl_berakhir_langganan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main><!-- End #main -->

    @include('layouts.admin.footer')
@endsection
<!-- Vendor JS Files -->
