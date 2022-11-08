@extends('layouts.admin.assets')

@section('content')
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <div class="container">

                <h1>Sekolah</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin-dashboard/') }}">Home</a></li>
                        <li class="breadcrumb-item active">Sekolah</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <div class="pagetitle">
            <div class="container">
                @if (\Session::has('success'))
                    <div class="p-3 mb-2 bg-success text-white rounded-3">{!! \Session::get('success') !!}</div>
                @elseif(\Session::has('error'))
                    <div class="p-3 mb-2 bg-danger text-white rounded-3">{!! \Session::get('error') !!}</div>
                @endif
                {{-- <a class="btn btn-primary mb-3" href="{{ url('/admin-dashboard/rumah-sakit/create') }}">Create</a> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $v)
                            <tr>
                                <th scope="row">{{ $v->id }}</th>
                                <td>{{ $v->username }}</td>
                                <td>{{ $v->email }}</td>
                                <td>{{ $v->no_telp }}</td>
                                <td>{{ $v->verifikasi }}</td>
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
