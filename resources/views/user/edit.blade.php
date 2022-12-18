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
        <div class="text-center">
            <a href="{{ url('edit/password') }}" class="btn btn-link">Edit Password</a>
        </div>

        <form action="{{ url('edit/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="basic-url">Username</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="username" aria-label="Username"
                    aria-describedby="basic-addon1" value="{{ Auth::user()->username }}">
            </div>
            <label for="basic-url">Email</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email"
                    aria-describedby="basic-addon2" value="{{ Auth::user()->email }}">
            </div>
            <label for="basic-url">Nomor Telepon</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">+62</span>
                </div>
                <input type="number" class="form-control" name="no_telp" placeholder="no_telp"
                    aria-describedby="basic-addon2" value="{{ Auth::user()->no_telp }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('layouts.user.footer')
@endsection
