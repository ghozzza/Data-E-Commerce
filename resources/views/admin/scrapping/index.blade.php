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
            <table class="table" id="table_id">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scrap as $i => $v)
                        <tr>
                            <th scope="row">{{ $i + 1 }}</th>
                            <td>{{ $v->nama }}</td>
                            <td>
                                <form action="{{ url('admin-dashboard/scrapping/details') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="index" value="{{ $i }}">
                                    <button class="btn btn-primary">Details</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('layouts.admin.footer')
@endsection
<!-- Vendor JS Files -->
