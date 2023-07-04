@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 10rem">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row justify-content-center mt-5">
        <div class="col-md-8 d-flex justify-content-center">
            <div class="row text-center d-flex justify-content-center">
                <h2>SIGN UP</h2>
                <h1>Cs_Outlet88 <i class="bi bi-cart3"></i></h1>
                <div class="col-lg-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="name" type="text" class="form-control rounded-5 my-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="USERNAME">
                        <input id="email" type="email" class="form-control rounded-5 my-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="EMAIL">
                        <input id="password" type="password" class="form-control rounded-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="PASSWORD">
                        <input id="password-confirm" type="password" class="form-control rounded-5 mt-4" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRM PASSWORD">
                        <button type="submit" class="btn mt-3 text-light px-5 rounded-5" style="background-color: brown">
                            {{ __('Sign Up') }}
                        </button>
                    </form>

                </div>
                <p class="mt-4">BELUM PUNYA AKUN <a href="register" style="color: #2ACEF2">DAFTAR AKUN</a></></p>
            </div>
        </div>
    </div>
</div>
@endsection
