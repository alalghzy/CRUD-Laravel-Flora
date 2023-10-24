@extends('layouts.auth')

@section('tittle')
Laman Register
@endsection

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-3 p-md-5">
                        <a href="/">
                            <div class="icon d-flex align-items-center justify-content-center" style="background: #17a2b8;">
                                <span class="fa fa-user-o"></span>
                            </div>
                        </a>
                        <h3 class="text-center mb-4 text-info">Form Register</h3>
                        <form method="POST" action="{{ route('register') }}" class="login-form">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" class="form-control rounded-left @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control rounded-left @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex">
                                <input id="password" type="password" class="form-control rounded-left @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex">
                                <input id="password-confirm" type="password" class="form-control rounded-left @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                            </div>
                            <div class="form-group d-md-flex justify-content-center" style="margin-bottom: -5px;">
                                <p>Sudah punya akun? <a href="{{ route('login') }}"> Login disini</a></p>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info rounded submit p-3 px-5">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
