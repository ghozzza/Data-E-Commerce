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
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard/paket') }}">Paket</a></li>
                    <li class="breadcrumb-item active">Pembayaran</li>
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
                <h3>ID: {{ $pakets['id'] }}</h3>
                <h3>Nama: {{ $pakets['nama'] }}</h3>
                <h3>Lama Langganan: {{ $pakets['lama_langganan'] }}</h3>
                <h3>Harga: {{ $pakets['harga'] }}</h3>
                <button class="btn btn-primary px-5" id="pay-button">Beli</button>
                <form action="" id="submit_form" method="POST">
                    @csrf
                    <input type="hidden" name="json" id="json_callback">
                </form>
                @include('layouts.script-midtrans')
            </div>
        </div>

    </main><!-- End #main -->

    @include('layouts.admin.footer')
@endsection
<!-- Vendor JS Files -->
