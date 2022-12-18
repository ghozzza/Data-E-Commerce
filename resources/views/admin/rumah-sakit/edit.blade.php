@extends('layouts.admin.assets')

@section('content')
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard/rumah-sakit') }}">Rumah Sakit</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="container">
            <form action="{{ url('admin-dashboard/rumah-sakit/update/' . $rumah_sakit->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama', $rumah_sakit->nama) }}">
                    <label for="title">Alamat</label>
                    <input type="text" class="form-control" name="alamat"
                        value="{{ old('alamat', $rumah_sakit->alamat) }}">
                    <label for="title">Nomor Telepon</label>
                    <input type="text" class="form-control" name="no_telp"
                        value="{{ old('no_telp', $rumah_sakit->no_telp) }}">
                    <br>
                    <div class="row">
                        <div class="col-1">
                            <button type="submit" class="btn btn-primary px-2">Edit</button>
                        </div>
                        <div class="col-1">
                            <a href="{{ url('admin-dashboard/rumah-sakit') }}" class="btn btn-warning px-3">Kembali</a>
                        </div>

                        {{-- <div class="col-1">
                        </div> --}}
                    </div>
                </div>
            </form>
        </div>

    </main><!-- End #main -->

    @include('layouts.admin.footer')
@endsection
<!-- Vendor JS Files -->
