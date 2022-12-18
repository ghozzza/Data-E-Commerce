@extends('layouts.user.assets')

{{-- @section('midtrans')
    @include('layouts.user.midtrans') --}}


@section('content')
    @include('layouts.user.header')
    <br><br><br>
    <div class="container mt-5 mb-5">
        @if (\Session::has('success'))
            <div class="p-3 mb-2 bg-success text-white rounded-3">{!! \Session::get('success') !!}</div>
        @elseif(\Session::has('error'))
            <div class="p-3 mb-2 bg-danger text-white rounded-3">{!! \Session::get('error') !!}</div>
        @endif

        <form action="{{ url('edit/password/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="basic-url">New Password</label>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="password"
                    aria-describedby="basic-addon2">
            </div>
            <label for="basic-url">Confirm Password</label>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="confirmPassword" placeholder="password"
                    aria-describedby="basic-addon2">
            </div>
            <a href="{{url('edit')}}"class="btn btn-link">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('layouts.user.footer')
@endsection
