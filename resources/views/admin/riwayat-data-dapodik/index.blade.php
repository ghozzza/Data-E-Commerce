@extends('layouts.admin.assets')

@section('content')
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Riwayat Data Dapodik</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
                            <th scope="col">ID</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Bulan</th>
                            <th scope="col">id_sekolah</th>
                            <th scope="col">jml_rombel</th>
                            <th scope="col">jml_guru</th>
                            <th scope="col">jml_peserta_didik</th>
                            <th scope="col">jml_tendik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayat_data_dapodiks as $v)
                            <tr>
                                <th scope="row">{{ $v->id }}</th>
                                <td>{{ $v->tahun }}</td>
                                <td>{{ $v->bulan }}</td>
                                <td>{{ $v->id_sekolah }}</td>
                                <td>{{ $v->jml_rombel }}</td>
                                <td>{{ $v->jml_guru }}</td>
                                <td>{{ $v->jml_peserta_didik }}</td>
                                <td>{{ $v->jml_tendik }}</td>
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
