@extends('layouts.user.assets')

{{-- @section('midtrans')
    @include('layouts.user.midtrans') --}}


@section('content')
    @include('layouts.user.header')

    @include('layouts.user.hero')

    <main id="main">
        <!-- ======= Pricing Section ======= -->
        @include('layouts.user.pricing')
    </main><!-- End #main -->

    @include('layouts.user.footer')
@endsection
