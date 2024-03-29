@extends('layouts.login.assets')

@section('content')
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="<?= asset('login/img/logo.jpg') ?>" alt="bootstrap 4 login page">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Register</h4>
                            <form action="{{ url('sign-up/store') }}" method="POST" class="my-login-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="name">username</label>
                                    <input id="username" type="text" class="form-control" name="username" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        What's your username?
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                        Your email is invalid
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="name">no_telp</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">+62</div>
                                      </div>
                                    <input id="no_telp" type="text" class="form-control" name="no_telp" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        What's your no_telp?
                                    </div> --}}
                                    <label for="name">no_telp</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">+62</div>
                                        </div>
                                        <input id="no_telp" type="text" class="form-control" name="no_telp" required
                                            autofocus>
                                        <div class="invalid-feedback">
                                            What's your no_telp?
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree" class="custom-control-input"
                                            required="">
                                        <label for="agree" class="custom-control-label">I agree to the <a
                                                href="#">Terms and Conditions</a></label>
                                        <div class="invalid-feedback">
                                            You must agree with our Terms and Conditions
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    Already have an account? <a href="{{ url('sign-in') }}">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2017 &mdash; Your Company
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
