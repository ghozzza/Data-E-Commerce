@extends('layouts.login.assets')

@section('content')
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="<?= asset('login/img/logo.jpg') ?>" alt="logo">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            @if (\Session::has('loginFailed'))
                                <div class="p-3 mb-2 bg-danger text-white rounded-3">{!! \Session::get('loginFailed') !!}</div>
                                <br>
                            @endif
                            <h4 class="card-title">Login</h4>
                            <form action="{{ url('sign-in') }}" method="POST" class="my-login-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Username Address</label>
                                    <input id="username" type="username" class="form-control" name="username"
                                        value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Username is invalid
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                        <a href="forgot.html" class="float-right">
                                            Forgot Password?
                                        </a>
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                                <div class="form-group m-0 mt-3">
                                    <a href="{{ url('/') }}" class="btn btn-link btn-block">
                                        Kembali
                                    </a>
                                </div>
                                <div class="mt-4 text-center">
                                    Don't have an account? <a href="{{ url('sign-up') }}">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; &mdash; Kelompok 1
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
