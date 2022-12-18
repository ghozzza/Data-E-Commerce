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
                            <h4 class="card-title" style="text-align:center">Daftar</h4>
                            <form action="{{ url('sign-up/store') }}" method="POST" class="my-login-validation"
                                novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" required
                                        autofocus>
                                    <div class="invalid-feedback">
                                        Masukkan username Anda
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                        Email tidak valid
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        data-eye>
                                    <div class="invalid-feedback">
                                        Masukkan Password
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
                                    <label for="name">Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">+62</div>
                                        </div>
                                        <input id="no_telp" type="text" class="form-control" name="no_telp" required
                                            autofocus>
                                        <div class="invalid-feedback">
                                            Masukkan nomor telepon
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Daftar
                                    </button>
                                </div>

                                <div class="form-group m-0 mt-3">
                                    <a href="{{ url('/') }}" class="btn btn-link btn-block">
                                        Kembali
                                    </a>
                                </div>

                                <div class="mt-4 text-center">
                                    Sudah memiliki akun? <a href="{{ url('sign-in') }}">Masuk</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2022 &mdash; Kelompok 1
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
