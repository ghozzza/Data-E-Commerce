@extends('layouts.admin.assets')

@section('content')
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

    </main><!-- End #main -->
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
                        <th scope="col">id_user</th>
                        <th scope="col">alamat</th>
                        <th scope="col">regency_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profil_user as $v)
                        <tr>
                            <th scope="row">{{ $v->id }}</th>
                            <td>{{ $v->id_user }}</td>
                            <td>{{ $v->alamat }}</td>
                            <td>{{ $v->regency_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('layouts.admin.footer')
@endsection
<!-- Vendor JS Files -->
