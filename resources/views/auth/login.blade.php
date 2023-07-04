@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 13rem">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
                <h2>LOGIN</h2>
                <h1>Cs_Outlet88 <i class="bi bi-cart3"></i></h1>
                <div class="col-lg-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- <input type="email" class="form-control rounded-5 my-4" id="exampleFormControlInput1" placeholder="USERNAME"> --}}
                        <input id="email" type="email" class="form-control rounded-5 my-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="USERNAME">
                        {{-- <input type="password" class="form-control rounded-5" id="exampleFormControlInput1" placeholder="PASSWORD"> --}}
                        <input id="password" type="password" class="form-control rounded-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="PASSWORD">
                        <button type="submit" class="btn mt-3 text-light px-5 rounded-5" style="background-color: brown">
                            {{ __('Login') }}
                        </button>
                    </form>

                </div>
                <p class="mt-4">BELUM PUNYA AKUN <a href="register" style="color: #2ACEF2">DAFTAR AKUN</a></></p>
            </div>
        </div>
    </div>
</div>
@endsection
