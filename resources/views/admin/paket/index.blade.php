@extends('layouts.admin.assets')
@section('midtrans')
    @include('layouts.admin.midtrans')

@section('content')
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Paket</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Paket</li>
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
                <table class="table" id="table_id">
                    <thead>
                        <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lama Langganan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pakets as $v)
                            <tr>
                                <th scope="row">{{ $v->id }}</th>
                                <td>{{ $v->nama }}</td>
                                <td>{{ $v->lama_langganan }} hari</td>
                                <td>{{ $v->harga }}</td>
                                <td>
                                    <a href="{{ url('admin-dashboard/paket/details') }}{{ '/' . $v->id }}"
                                        target="_blank">Details</a>
                                    {{-- <button class="btn btn-primary px-5" id="pay-button">Beli</button>
                                    <form action="" id="submit_form" method="POST">
                                        @csrf
                                        <input type="hidden" name="json" id="json_callback">
                                    </form>
                                    @include('layouts.script-midtrans') --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main><!-- End #main -->

    @include('layouts.admin.footer')
@endsection
<!-- Vendor JS Files -->
